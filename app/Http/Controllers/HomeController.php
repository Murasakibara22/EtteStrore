<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Models\SousCategorie;

class HomeController extends Controller
{

    function index(){
        $produit = Produit::all();
        $categorie = Categorie::OrderBy('id','DESC')->take(6)->get();
        return view('welcome', compact('produit','categorie'));
    }

    function prod(){
        $prod = Produit::paginate(3);
        $produit = Produit::query()
                    ->select('produits.libelle', 'produits.prix', 'produits.photo1','produits.slug')
                    ->join('sous_categories', 'produits.souscategorie_id', '=', 'sous_categories.id')
                    ->where('sous_categories.libelle', '=', 'telephones')
                    ->get();

        $souscat = SousCategorie::query()
                    ->select('sous_categories.libelle')
                    ->join('categories', 'sous_categories.categorie_id', '=', 'categories.id')
                    ->where('categories.libelle', '=', 'mobile')
                    ->get();
        return view('produit', compact('produit', 'souscat','prod'));
    }


    function shop($slug){
        $prodact = Produit::where('slug',$slug)->get();
        return view('product-extended',compact('prodact') );
    }
}
