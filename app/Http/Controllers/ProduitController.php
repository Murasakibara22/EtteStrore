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
            'photo2' => ['required'],
        ]);

        $prod                = new Produit ;
        $prod->libelle       = $request->libelle;
        $prod->prix       = $request->prix;
        $prod->souscategorie_id       = $request->souscategorie_id;
        $prod->qte_stock       = $request->qte_stock;
        $prod->type       = $request->type;
        $prod->description   = $request->description;
        $prod->slug   = Str::slug("$request->token". Hash::make($request->libelle),"-");
        if (request()->file('photo1')) {
            $img = request()->file('photo1');
                $photo = md5($img->getClientOriginalExtension().time().$request->email).".".$img->getClientOriginalExtension();
                $source = $img;
                $target = 'images/Produit/'.$photo;
                InterventionImage::make($source)->fit(212,207)->save($target);
                $prod->photo1   =  $photo;
        }else{
            $prod->photo1   = "default.jpg";
        }
        if (request()->file('photo2')) {
            $img = request()->file('photo2');
                $photo = md5($img->getClientOriginalExtension().time().$request->email).".".$img->getClientOriginalExtension();
                $source = $img;
                $target = 'images/Produit/'.$photo;
                InterventionImage::make($source)->fit(212,207)->save($target);
                $prod->photo2   =  $photo;
        }else{
            $prod->photo2   = "default.jpg";
        }
        if (request()->file('photo3')) {
            $img = request()->file('photo3');
                $photo = md5($img->getClientOriginalExtension().time().$request->email).".".$img->getClientOriginalExtension();
                $source = $img;
                $target = 'images/Produit/'.$photo;
                InterventionImage::make($source)->fit(212,207)->save($target);
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



    public function listProduit(){

        $produit = Produit::all();
        return view('AdminPages.Produit.list', compact('produit'));
    }
}
