@extends('dash/layout/app')

@section('content')


@if ( session('success'))
  <div class="alert alert-success">
  Partenaire sauvegarder avec succès
  </div>
@endif

@if ( session('erreur'))
  <div class="alert alert-danger">
  Partenaire non sauvegarder (un champ n'est pas correctement remplis)  </div>
@endif

@if ( session('error'))
  <div class="alert alert-danger">
  un Probleme est survenue ( le partenaire existe deja )  </div>
@endif


<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ajouter vos partenaire</h4>
                  <p class="card-description">
                   Bienvenue Mr l'administrateur
                  </p>
                  <form class="forms-sample" action="{{ url('/PartnaireEdit/'.$partenaire->slug) }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
      
                      </br></br>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nom</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" value="{{ old($partenaire->nom)  ??  $partenaire->nom}}" name="nom" id="exampleInputUsername2" placeholder="Entrer le nom">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" value="{{ old($partenaire->email)  ??  $partenaire->email}}"  name="email" id="exampleInputEmail2" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" value="{{ old($partenaire->mobile)  ??  $partenaire->mobile}}"  name="mobile" id="exampleInputMobile" placeholder="Ex : 07-XX-XX-XX-XX">
                      </div>
                    </div>

                    <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Logos</label> <!-- <div style="width:150px; height=200px; border : 1px solid black; margin-bottom: 5px; "></div> -->
                    <input type="file" id="real-file" hidden="hidden" name="photo" />
                    <button type="button" id="custom-button" name="photo" value="{{ old($partenaire->photo)  ??  $partenaire->photo}}">choisir</button>
                    <span id="custom-text">{{ old($partenaire->photo)  ??  $partenaire->photo}}</span>
                    </div>
                    <input type="hidden" name="token" value="{{ csrf_token() }}" />

                    <button type="submit" class="btn btn-primary me-3 mx-5">Modifier</button>
                   <a href="/Partnaire_list"> <button class="btn btn-light">Cancel</button></a>
                  </form>
                </div>
              </div>
            </div>

@endsection