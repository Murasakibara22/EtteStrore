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
                  <form class="forms-sample" action="{{ route('AddPartenaire') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      @method('POST')
      
                      </br></br>
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
                        <input type="text" value="+225"  class="form-control" required="required;max:15" name="mobile" id="exampleInputMobile" placeholder="Ex : 07-XX-XX-XX-XX">
                      </div>
                    </div>

                    <input type="file" id="real-file" hidden="hidden" name="photo" />
                    <button type="button" id="custom-button" name="photo">choisir</button>
                    <span id="custom-text">cliquez ici pour ajouter le logo</span>

                    <input type="hidden" name="token" value="{{ csrf_token() }}" />

                    <button type="submit" class="btn btn-primary me-3">enregistrer</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>

@endsection