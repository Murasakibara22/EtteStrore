<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\SousCategorie;
use Intervention\Image\Image;
use Image as InterventionImage;
use Illuminate\Support\Facades\Hash;

class SousCatController extends Controller
{
    
    public function newSousCat(){

        $categorie = Categorie::all();
        return view('AdminPages.SousCategorie.new', compact('categorie'));
    }

    public function addSousCat(Request $request)
    {
                $request->validate([
                    'libelle' => ['required', 'string', 'max:255'],
                    'description' => ['required'],
                    'categorie_id' => ['required'],
                ]);

                $souscat         =  new SousCategorie;
                $souscat->libelle    = $request->libelle;
                $souscat->description    = $request->description;
                $souscat->categorie_id    = $request->categorie_id;
                $souscat->slug   = Str::slug("$request->token". Hash::make($request->libelle),"-");
                $souscat->save();

                if( $souscat->save()){
                
                    return  redirect()->back()->with('success', 'souscat sauvegarder');
                }else{
                    return  redirect()->back()->with('error', 'souscat non sauvegarder');
                }
        
    }

        public function listSousCat(){
            
            $souscat = SousCategorie::all();
            return view('AdminPages.SousCategorie.list', compact('souscat'));

        }



        public function editSousCat($slug)
        {
            $souscat = SousCategorie::where('slug',$slug)->first();
            if(isset($souscat)){
                $categorie = Categorie::all();
                 return view('AdminPages.SousCategorie.edit', compact('souscat','categorie'));
            }else{
                return redirect('/SousCategorie_list')->with('NotExist', "La souscat n'existe pas ");
            }
        }


        public function updateSousCat(Request $request, $slug)
        {
           // try{
                $souscat = SousCategorie::where('slug',$slug)->first();
                if(isset($souscat)){

                $souscat->libelle    = $request->libelle;
                $souscat->description    = $request->description;
                $souscat->categorie_id    = $request->categorie_id;
                $souscat->slug   = Str::slug("$request->token". Hash::make($request->libelle),"-");
                $souscat->update();

                if( $souscat->update()){
                
                    return  redirect('/SousCategorie_list')->with('success', 'souscat modifier ');
                }else{
                    return  redirect()->back()->with('error', 'souscat non modifier');
                }

                 }

           // }catch(Exception $err){
            //    report($err);
//
            //    return redirect('/souscat list')->with('probleme', 'un probleme est survenue');
            //}

        }


        public function deleteSousCat($slug)
        { 
            // try{
                    $souscat = SousCategorie::where('slug',$slug)->first();
                    if(isset($souscat)){ 
                        return view('AdminPages.SousCategorie.delete', compact('souscat'));
                    }else{
                        return redirect('/SousCategorie_list')->with('NotExist', "La souscat n'existe pas ");
                    }
                // }catch(Exception $err){
            //    report($err);
//
            //    return redirect('/souscat list')->with('probleme', 'un probleme est survenue');
                 //}
        }

        public function destroySousCat($slug)
        {
            // try{
                    $souscat = SousCategorie::where('slug',$slug)->first();
                    if(isset($souscat))
                    {
                        $souscat->delete();
                        if($souscat->delete()){
                            return  redirect('/SousCategorie_list')->with('success', 'souscat supprimer ');
                        }else{

                        }return  redirect()->back()->with('error', 'souscat non suprimer');
                    }else{
                                return redirect('/SousCategorie_list')->with('NotExist', "La souscat n'existe pas ");
                            }
  //                }catch(Exception $err){
                    //    report($err);
        //
                    //    return redirect('/souscat list')->with('probleme', 'un probleme est survenue');
                    //}
         }
}
