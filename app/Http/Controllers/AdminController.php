<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('dashboard');
    }





    
    public function deconnexion() {
        auth()->logout();
    
        return redirect('/');
    }
}
