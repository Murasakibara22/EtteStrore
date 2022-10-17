@extends('dash/layout/app')

@section('content')

<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Modification</h4>
                  <p class="card-description">
                    
                  </p>
                  <form class="forms-sample" action="{{ url('/UtilisateursEdit/'.$users->slug) }}" method="POST" enctype="multipart/form-data">
                      @csrf 
                      @method('PUT')

                      <div class="imageModif" >
                           <img src="../images/User/{{$users->photo}}" class="main-profile-img" />
                           <i class="fa fa-edit" > </i> 
                           <div class="upload-btn-wrapper" name="photo">
                            <button class="btn" name="photo">ajouter</button>
                            <input type="file" name="photo" value="{{ old($users->photo)  ??  $users->photo }}"/>
                          </div>
                          </div></br></br></br>
                    <div class="form-group">
                      <label for="exampleInputName1">nom</label>
                      <input type="text" value="{{ old($users->nom)  ??  $users->nom }}" name="nom" class="form-control" id="exampleInputName1" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">fonction</label>
                      <input type="text" value="{{ old($users->prenom)  ??  $users->prenom }}"  name="prenom" class="form-control" id="exampleInputCity1" placeholder="Location">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Email address</label>
                      <input type="email" value="{{ old($users->email)  ??  $users->email }}" name="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">mobile</label>
                      <input type="text" value="{{ old($users->mobile)  ??  $users->mobile }}" name="mobile" class="form-control" id="exampleInputPassword4" placeholder="mobile">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">role</label>
                      <input type="text" value="{{ old($users->role)  ??  $users->role }}"  name="role" class="form-control" id="exampleInputCity1" placeholder="Location">
                    </div>
                    <input type="hidden" name="token" value="{{ csrf_token() }}" />
                    <button type="submit" class="btn btn-primary me-2">modifier</button>
                  <a href="/Utilisateurs-list" > <button class="btn btn-light">Cancel</button> </a>
                  </form>
                </div>
              </div>
            </div>

@endsection