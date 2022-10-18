<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{

    public function listAllCom()
    {
        $commande = Commande::all();

        return view('AdminPages.Commande.list', compact('commande'));
    }

    public function addCart(Request $request){

    }
}
