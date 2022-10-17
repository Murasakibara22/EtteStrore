<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class UserController extends Controller
{
            public function newUser(){

                return view('AdminPages.User.new');
            }

            public function addUser(Request $request){

                $validatedData = $request->validate([
                    'nom' => ['required', 'string', 'max:100'],
                    'prenom' => ['required', 'string', 'max:255'],
                    'mobile' => ['required', 'string', 'max:15', 'unique:users'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'password' => 'required|string|min:8',
                ]);

                if($validatedData){

                $user         =  new User;
                $user->nom    = $request->nom;
                $user->prenom    = $request->prenom;
                $user->email   = $request->email;
                $user->slug   = Str::slug("$request->token". Hash::make($request->nom),"-");
                $user->mobile  = $request->mobile;
                if (request()->file('photo')) {
                    $img = request()->file('photo');
                        $photo = md5($img->getClientOriginalExtension().time().$request->email).".".$img->getClientOriginalExtension();
                        $source = $img;
                        $target = 'images/User/' .$photo;
                        InterventionImage::make($source)->fit(212,207)->save($target);
                        $user->photo   =  $photo;
                }else{
                    $user->photo   = "default.jpg";
                }

                $user->password = Hash::make($request->password);
                $user->role    = $request->role;

                $user->save();

                if( $user->save()){

                    event(new Registered($user));
                
                    return  redirect()->back()->with('success', 'user sauvegarder');
                }else{
                    return  redirect()->back()->with('error', 'user non sauvegarder');
                }

            }else{
                return  redirect()->back()->with('error', 'user non sauvegarder');
            }
            

            }


            //liste tous
            public function listAllUser(){

                $user = User::all();
                return view('AdminPages.User.list', compact('user'));
            }

        //vue modifier
            public function editUser($slug){

                $users = User::where('slug',$slug)->first();
                return view('AdminPages.User.edit', compact('users'));
            }

        //modifier
            public function updateUser(Request $request ,$slug){

                try{
                    $user = User::where('slug',$slug)->first();
                    if(isset($user))
                    {
                        $user->nom    = $request->nom;
                        $user->email   = $request->email;
    
                        $user->slug   = Str::slug("$request->token". Hash::make($request->nom),"-");
                        $user->mobile  = $request->mobile;
                        if (request()->file('photo')) {
                            $img = request()->file('photo');
                                $photo = md5($img->getClientOriginalExtension().time().$request->email).".".$img->getClientOriginalExtension();
                                $source = $img;
                                $target = 'images/User/'.$photo;
                                InterventionImage::make($source)->fit(212,207)->save($target);
                                $user->photo   =  $photo;
                        }else{
                            $user->photo   = "default.jpg";
                        }
                
                        $user->role    = $request->role;

                    
                        $user->update();
                            if($user->update()){
                                    return redirect('/Utilisateurs_list')->with('succes', 'Utilisateurs modifier');
                            }else{
                                return redirect()->back()->with('erreur', "l'un des champs n'est pas correctement remplis");
                            }
                    }

            }catch(Exception $err){
                report($err);
                return redirect()->back()->with('error', "probleme survenue veuillezreessayer plus tard");
                }
            }

        //view dele
        public function deleteUser($slug)
        {
            $UserSearch =  User::where('slug',$slug)->first();
                if(isset($UserSearch))
                    {
                        return view('AdminPages.User.delete', compact('UserSearch'));
                    }else{
                        return redirect('/Utilisateurs_list')->with('NotExist', "L'utilisateur spécifier n'existe pas");
                    }
        }

            public function  destroyUser($slug){

                $user =  User::where('slug',$slug)->first();
                if(isset($user))
                    {
                        $user->delete();
                        return redirect('/Utilisateurs_list')->with('success', 'Utilisateur Supprimer');
                    }else{
                        return redirect('/Utilisateurs_list')->with('NotExist', "L'utilisateur spécifier n'existe pas");
                    }
            }
}
