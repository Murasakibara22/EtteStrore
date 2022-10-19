<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\SousCatController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\PartenaireController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/dashboard',[AdminController::class , 'index'])->middleware(['auth'])->name('dashboard');


//Utilisateurs
    Route::get('/addUser', [UserController::class , 'newUser']);

    Route::post('/addUser', [UserController::class , 'addUser'])->name('AddUser');

    Route::get('/Utilisateurs_list', [UserController::class , 'listAllUser']);

    Route::get('/Utilisateurs-edit/{slug}', [UserController::class , 'editUser']);

    Route::put('/UtilisateursEdit/{slug}', [UserController::class , 'updateUser'])->name('editUser');

    Route::get('Userdelete/{slug}', [UserController::class , 'deleteUser']);

    Route::delete('/Userdele/{slug}', [UserController::class , 'destroyUser']);


    
            //categories
Route::get('/newCategorie', [CategorieController::class , 'newCat']);

Route::post('/new_Categorie', [CategorieController::class , 'addCat'])->name('addCat');

Route::get('/Categorie_list', [CategorieController::class , 'listCat']);

Route::get('/Categorie_edit/{slug}', [CategorieController::class , 'editCat']);

Route::put('/CategoriEdit/{slug}', [CategorieController::class , 'updateCat'])->name('ModifCat');

Route::get('/Categorie_delete/{slug}', [CategorieController::class , 'deleteCat']);

Route::delete('/CategoriDelete/{slug}', [CategorieController::class , 'destroyCat']);


            //categories
 Route::get('/new_SousCategorie', [SousCatController::class , 'newSousCat']);

 Route::post('/new_SousCategorie', [SousCatController::class , 'addSousCat'])->name('addsouscat');
            
Route::get('/SousCategorie_list', [SousCatController::class , 'listSousCat']);
            
Route::get('/SousCategorie_edit/{slug}', [SousCatController::class , 'editSousCat']);
            
Route::put('/SousCategoriEdit/{slug}', [SousCatController::class , 'updateSousCat'])->name('ModifSousCat');
            
Route::get('/SousCategorie_delete/{slug}', [SousCatController::class , 'deleteSousCat']);
            
Route::delete('/SousCategoriDelete/{slug}', [SousCatController::class , 'destroySousCat']);


    //produits
Route::get('/new_produit', [ProduitController::class , 'newProd']);

Route::post('/new_produit', [ProduitController::class , 'addProd'])->name('addProd');
    
Route::get('/Produit_list', [ProduitController::class , 'listProduit']);
            
Route::get('/Produit_edit/{slug}', [ProduitController::class , 'editProduit']);
            
Route::put('/ProduitEdit/{slug}', [ProduitController::class , 'updateProduit'])->name('ModifProduit');
            
Route::get('/Produit_delete/{slug}', [ProduitController::class , 'deleteProduit']);
            
Route::delete('/ProduitDelete/{slug}', [ProduitController::class , 'destroyProduit']);


// Partenaires
Route::get('/addPartnaire', [PartenaireController ::class , 'newPartnaire']);

Route::post('/addPartnaire', [PartenaireController ::class , 'addPartnaire'])->name('AddPartenaire');

Route::get('/Partnaire_list', [PartenaireController ::class , 'listAllPartnaire']);

Route::get('/Partnaire_edit/{slug}', [PartenaireController ::class , 'editPartnaire']);

Route::put('/PartnaireEdit/{slug}', [PartenaireController ::class , 'editPartnaires'])->name('editPartnaires');

Route::get('Partnairedelete/{slug}', [PartenaireController ::class , 'deletePartnaire']);

Route::delete('/Partnairedele/{slug}', [PartenaireController ::class , 'destroyPartnaire']);

//commantaires
Route::get('/commandes_list', [CommandeController::class , 'listAllCom']);

});

Route::get('/deconnexion',[AdminController::class , 'deconnexion'] );

require __DIR__.'/auth.php';
