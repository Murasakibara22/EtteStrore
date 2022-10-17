@extends('dash/layout/app')

@section('content')


@if ( session('success'))
  <div class="alert alert-success">
  Utilisateurs sauvegarder avec succès
  </div>

@endif

@if ( session('error'))
  <div class="alert alert-danger">
  Utilisateurs non sauvegarder (un champ n'est pas correctement remplis)  </div>

@endif



<div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">ajouter un utilisateur</h4>
                  <p class="card-description">
                   Bienvenue Mr l'administrateur
                  </p>
                  <form class="forms-sample" action="{{ route('AddUser') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      @method('POST')
                      
                          <div class="imageModif">
                           <img src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png" class="main-profile-img" />
                           <i class="fa fa-edit" > </i> 
                           <div class="upload-btn-wrapper">
                            <button class="btn" name="photo">ajouter</button>
                            <input type="file" name="photo"  require/>
                          </div>
                          </div></br></br></br>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nom</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="nom" id="exampleInputUsername2" placeholder="Entrer le nom">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" name="email" id="exampleInputEmail2" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
                      <div class="col-sm-9">
                        <input type="text" value="+225"  class="form-control" name="mobile" id="exampleInputMobile" placeholder="Ex : 07-XX-XX-XX-XX">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Mot de passe </label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" name="password" id="exampleInputPassword2" placeholder="Mot de passe par defaut">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-3 col-form-label"> fonction</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="fonction" id="exampleInputPassword2" placeholder="Mot de passe par defaut">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Status</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="role" id="exampleInputConfirmPassword2" placeholder="Entrer le Role ">
                      </div>
                    </div>
                    <input type="hidden" name="token" value="{{ csrf_token() }}" />
                    <button type="submit" class="btn btn-primary me-3">enregistrer</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>

@endsection