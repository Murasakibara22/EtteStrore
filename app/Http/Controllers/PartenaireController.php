<?php

namespace App\Http\Controllers;

use App\Models\Partenaire;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Image as InterventionImage;
use Intervention\Image\Image;

class PartenaireController extends Controller
{
    public function newPartnaire()
    {
        return view('AdminPages.Partenaire.New');
    }

    public function addPartnaire(Request $request)
    {
      
     try{
            $partenaire                = new Partenaire ;
            $partenaire->nom       = $request->nom;
            $partenaire->mobile   = $request->mobile;
            $partenaire->email   = $request->email;
            $partenaire->slug   =  Str::slug("$request->token".Hash::make("$request->nom"),"-");
            //renomer les photos et les stocker dans un dossier et enrg le nom en BD
            if (request()->file('photo')) {
                $img = request()->file('photo');
                    $messi = md5($img->getClientOriginalExtension().time().$request->updated_at).".".$img->getClientOriginalExtension();
                    $source = $img;
                    $target = 'images/partenaires/'.$messi;
                    InterventionImage::make($source)->fit(210,57)->save($target);
                    $partenaire->photo   =  $messi;
        }else {
            $partenaire->photo = 'default.jpg';
        }
                
                $partenaire->save();
                        if($partenaire->save()){
                                return redirect()->back()->with('success','catégorie sauvegarder avec succès');
                        } else{
                            return redirect()->back()->with('erreur','un champ n/est pas valide');
                        } 
    }catch(Exception $err){
        report($err);
        return redirect()->back()->with('error','un champ n/est pas valide');
    }
}


    public function listAllPartnaire()
    {
        $partenaire = Partenaire::all();

        return view('AdminPages.Partenaire.list', compact('partenaire'));  
      
    }

            //vue modifier
            public function editPartnaire($slug)
            {
                $partenaire = Partenaire::where('slug',$slug)->first();
                return view('AdminPages.Partenaire.edit', compact('partenaire'));
            }

        //modifier
     public function editPartnaires(Request $request , $slug)
    {
        try{
            $partenaire            =  Partenaire::where('slug',$slug)->first();
            if(isset($partenaire)){
                $partenaire->nom       = $request->nom;
                $partenaire->mobile   = $request->mobile;
                $partenaire->email    = $request->email;
                $partenaire->slug   = Str::slug("$request->token".Hash::make("$request->nom"),"-");
                if (request()->file('photo')) {
                    $img = request()->file('photo');
                        $messi = md5($img->getClientOriginalExtension().time().$request->mobile).".".$img->getClientOriginalExtension();
                        $source = $img;
                        $target = 'images/partenaires/'.$messi;
                        InterventionImage::make($source)->fit(210,57)->save($target);
                        $partenaire->photo   =  $messi;
                    }
               
                $partenaire->update();
                     if($partenaire->update()){
                        return redirect('/Partnaire_list')->with('succes', 'Partenaire modifier');
                    }else{
                        return redirect()->back()->with('err', "un champ n'est pas correctement remplis ");
                    }
            
            }else{
                return redirect('/Partnaire_list')->with('erreurr','Le partenaire indiquer n/existe pas');
            }
          
    }catch(Exception $err){
            report($err);
           return redirect('/Partnaire_list')->with('error','un champ n/est pas valide');
       }
    }
        //view dele
    public function deletePartnaire($slug)
    {
        try{
                $partenaire = Partenaire::where('slug',$slug)->first();
                if(isset($partenaire)){
                return view('AdminPages.Partenaire.delete', compact('partenaire'));
            }else{
                return redirect('/Partnaire_list')->with('erreurr', 'Partenaire Supprimer');
            }

        }catch(Exception $err){
            report($err);

            return redirect('/Partnaire_list')->with('error', 'Partenaire Supprimer');
        }
    }

    public function  destroyPartnaire($slug)
    {
        try{
                    $partenaire = Partenaire::where('slug',$slug)->first();

                if(isset($partenaire)){
                    $partenaire->delete();
                    return redirect('/Partnaire_list')->with('success', 'Partenaire Supprimer');
                }else{
                    return redirect('/Partnaire_list')->with('erreurr', 'Partenaire Supprimer');
                }

        }catch(Exception $err){
            report($err);

            return redirect('/Partnaire_list')->with('error', 'Partenaire Supprimer');
        }
    }
}
