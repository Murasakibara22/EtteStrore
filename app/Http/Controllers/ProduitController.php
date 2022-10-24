<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\SousCategorie;
use Intervention\Image\Image;
use Image as InterventionImage;
use Illuminate\Support\Facades\Hash;

class ProduitController extends Controller
{
    public function newProd(){

        $souscat = SousCategorie::all();
        return view('AdminPages.Produit.new', compact('souscat'));
    }

    public function addProd(Request $request)
    {
        $request->validate([ 
            'libelle' => ['required', 'string', 'max:255'],
            'description' => ['required'],
            'prix' => ['required'],
            'souscategorie_id' => ['required'],
            'qte_stock' => ['required'],
            'photo1' => ['required'],
        ]);

        $prod                      = new Produit ;
        $prod->libelle             = $request->libelle;
        $prod->prix                = $request->prix;
        $prod->souscategorie_id    = $request->souscategorie_id;
        $prod->qte_stock          = $request->qte_stock;
        if($request->type){
            $prod->type              = $request->type;
        }else{
            $prod->type              = 'Autre';
        }
        if($request->taille){
           $prod->taille               = $request->taille;
        }else{
           $prod->taille               = 'Aucune';
        }
        $prod->couleur              = $request->couleur;
        $prod->description       = $request->description;
        $prod->slug              = Str::slug("$request->token". Hash::make($request->libelle),"-");
        if (request()->file('photo1')) {
            $img = request()->file('photo1');
                $photo = md5($img->getClientOriginalExtension().time().$request->libelle).".".$img->getClientOriginalExtension();
                $source = $img;
                $target = 'images/Produit/'.$photo;
                InterventionImage::make($source)->fit(215,271)->save($target);
                $prod->photo1   =  $photo;
        }else{
            $prod->photo1   = "default.jpg";
        }
        if (request()->file('photo2')) {
            $img = request()->file('photo2');
                $photo = md5($img->getClientOriginalExtension().time().$request->libelle).".".$img->getClientOriginalExtension();
                $source = $img;
                $target = 'images/Produit/'.$photo;
                InterventionImage::make($source)->fit(215,271)->save($target);
                $prod->photo2   =  $photo;
        }else{
            $prod->photo2   = "default.jpg";
        }
        if (request()->file('photo3')) {
            $img = request()->file('photo3');
                $photo = md5($img->getClientOriginalExtension().time().$request->libelle).".".$img->getClientOriginalExtension();
                $source = $img;
                $target = 'images/Produit/'.$photo;
                InterventionImage::make($source)->fit(215,271)->save($target);
                $prod->photo3   =  $photo;
        }else{
            $prod->photo3   = "default.jpg";
        }

        $prod->save();

        if($prod->save()){
            return redirect()->back()->with('success', 'Produit sauvegarder avce succes ');
        }else{
            return redirect()->back()->with('NotSave', 'Produit non sauvegarder');
        }
    }



    public function listProduit()
    {
        $produit = Produit::all();
        return view('AdminPages.Produit.list', compact('produit'));
    }

    public function editProduit($slug)
    {
        $produit = Produit::where('slug', $slug)->first();
        if(isset($produit))
        {
            $souscat =SousCategorie::all();
            return view('AdminPages.Produit.edit', compact('produit', 'souscat'));
        }else{
            return redirect('/Produit_list')->with('NotExist', "le produit specifier n'existe pas");
        }
    }



    public function updateProduit(Request $request, $slug)
    {
        $produit = Produit::where('slug', $slug)->first();
        if(isset($produit))
        {
            $produit->libelle                = $request->libelle;
            $produit->prix                   = $request->prix;
            $produit->souscategorie_id       = $request->souscategorie_id;
            $produit->qte_stock               = $request->qte_stock;
            $produit->type                   = $request->type;
            $prod->taille              = $request->taille;
            $prod->couleur              = $request->couleur;
            $produit->description            = $request->description;
            $produit->slug                    = Str::slug("$request->token". Hash::make($request->libelle),"-");
            if (request()->file('photo1')) {
                $img = request()->file('photo1');
                    $photo = md5($img->getClientOriginalExtension().time().$request->libelle).".".$img->getClientOriginalExtension();
                    $source = $img;
                    $target = 'images/Produit/'.$photo;
                    InterventionImage::make($source)->fit(215,271)->save($target);
                    $produit->photo1   =  $photo;
            }else{
                $produit->photo1   = "default.jpg";
            }
            if (request()->file('photo2')) {
                $img = request()->file('photo2');
                    $photo = md5($img->getClientOriginalExtension().time().$request->libelle).".".$img->getClientOriginalExtension();
                    $source = $img;
                    $target = 'images/Produit/'.$photo;
                    InterventionImage::make($source)->fit(215,271)->save($target);
                    $produit->photo2   =  $photo;
            }else{
                $produit->photo2   = "default.jpg";
            }
            if (request()->file('photo3')) {
                $img = request()->file('photo3');
                    $photo = md5($img->getClientOriginalExtension().time().$request->libelle).".".$img->getClientOriginalExtension();
                    $source = $img;
                    $target = 'images/Produit/'.$photo;
                    InterventionImage::make($source)->fit(215,271)->save($target);
                    $produit->photo3   =  $photo;
            }else{
                $produit->photo3   = "default.jpg";
            }
    
            $produit->update();
    
            if($produit->update()){
                return redirect('/Produit_list')->with('Modifsuccess', 'Produit modifier avce succes ');
            }else{
                return redirect('/Produit_list')->with('NotModif', 'Produit non sauvegarder');
            }
        }else{
            return redirect('/Produit_list')->with('NotExist', "le produit specifier n'existe pas");
        }
    }

    public function deleteProduit($slug)
    {
        $produit = Produit::where('slug', $slug)->first();
        if(isset($produit))
        {
            return view('AdminPages.Produit.delete', compact('produit'));
        }else{
            return redirect('/Produit_list')->with('NotExist', "le produit specifier n'existe pas");
        }
    }


    public function destroyProduit($slug)
    {
        $produit = Produit::where('slug', $slug)->first();
        if(isset($produit))
        {
            $produit->delete();
            if($produit->delete()){
                return redirect('/Produit_list')->with('SuppSuccess', 'produit supprimer avec succes');
            }else{
                return redirect('/Produit_list')->with('NotSupp', 'produit ne peut pas etre supprimer');
            }
           
        }else{
            return redirect('/Produit_list')->with('NotExist', "le produit specifier n'existe pas");
        }
    }
}
