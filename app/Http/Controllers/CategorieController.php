<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Image;
use Image as InterventionImage;

class CategorieController extends Controller
{
    public function newCat(){
        return view('AdminPages.Categorie.new');
    }

    public function addCat(Request $request)
    {
                $request->validate([
                    'libelle' => ['required', 'string', 'max:255'],
                    'description' => ['required'],
                ]);

                $categorie         =  new Categorie;
                $categorie->libelle    = $request->libelle;
                $categorie->description    = $request->description;
                $categorie->slug   = Str::slug("$request->token". Hash::make($request->libelle),"-");
                if (request()->file('photo')) {
                    $img = request()->file('photo');
                        $photo = md5($img->getClientOriginalExtension().time().$request->email).".".$img->getClientOriginalExtension();
                        $source = $img;
                        $target = 'images/Categorie/' .$photo;
                        InterventionImage::make($source)->fit(212,207)->save($target);
                        $categorie->photo   =  $photo;
                }else{
                    $categorie->photo   = "default.jpg";
                }

                $categorie->save();

                if( $categorie->save()){
                
                    return  redirect()->back()->with('success', 'categorie sauvegarder');
                }else{
                    return  redirect()->back()->with('error', 'categorie non sauvegarder');
                }
        
    }

        public function listCat(){
            
            $categorie = Categorie::all();
            return view('AdminPages.Categorie.list', compact('categorie'));

        }



        public function editCat($slug)
        {
            $categorie = Categorie::where('slug',$slug)->first();
            if(isset($categorie)){
                 return view('AdminPages.Categorie.edit', compact('categorie', $categorie));
            }else{
                return redirect('/Categorie_list')->with('NotExist', "La categorie n'existe pas ");
            }
        }


        public function updateCat(Request $request, $slug)
        {
           // try{
                $categorie = Categorie::where('slug',$slug)->first();
                if(isset($categorie)){
                    $categorie         =  new Categorie;
                $categorie->libelle    = $request->libelle;
                $categorie->description    = $request->description;
                $categorie->slug   = Str::slug("$request->token". Hash::make($request->libelle),"-");
                if (request()->file('photo')) {
                    $img = request()->file('photo');
                        $photo = md5($img->getClientOriginalExtension().time().$request->email).".".$img->getClientOriginalExtension();
                        $source = $img;
                        $target = 'images/Categorie/'.$photo;
                        InterventionImage::make($source)->fit(212,207)->save($target);
                        $categorie->photo   =  $photo;
                }else{
                    $categorie->photo   = "default.jpg";
                }

                $categorie->update();

                if( $categorie->update()){
                
                    return  redirect('/Categorie_list')->with('success', 'categorie modifier ');
                }else{
                    return  redirect()->back()->with('error', 'categorie non modifier');
                }

                 }

           // }catch(Exception $err){
            //    report($err);
//
            //    return redirect('/categorie list')->with('probleme', 'un probleme est survenue');
            //}

        }


        public function deleteCat($slug)
        { 
            // try{
                    $categorie = Categorie::where('slug',$slug)->first();
                    if(isset($categorie)){ 
                        return view('AdminPages.Categorie.delete', compact('categorie'));
                    }else{
                        return redirect('/Categorie_list')->with('NotExist', "La categorie n'existe pas ");
                    }
                // }catch(Exception $err){
            //    report($err);
//
            //    return redirect('/categorie list')->with('probleme', 'un probleme est survenue');
                 //}
        }

        public function destroyCat($slug)
        {
            // try{
                    $categorie = Categorie::where('slug',$slug)->first();
                    if(isset($categorie))
                    {
                        $categorie->delete();
                        if($categorie->delete()){
                            return  redirect('/Categorie_list')->with('success', 'categorie supprimer ');
                        }else{

                        }return  redirect()->back()->with('error', 'categorie non suprimer');
                    }else{
                                return redirect('/Categorie_list')->with('NotExist', "La categorie n'existe pas ");
                            }
  //                }catch(Exception $err){
                    //    report($err);
        //
                    //    return redirect('/categorie list')->with('probleme', 'un probleme est survenue');
                    //}
         }
    
}
