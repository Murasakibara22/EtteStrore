<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

});

Route::get('/deconnexion',[AdminController::class , 'deconnexion'] );

require __DIR__.'/auth.php';
