@extends('dash/layout/app')

@section('content')

@if ( session('succes'))
  <div class="alert alert-success">
   Categorie modifier  avec succes 
  </div>
@endif

@if ( session('Aucun'))
  <div class="alert alert-danger">
    Aucune Categorie  Enregistrer
  </div>

@endif

@if ( session('NotExiste'))
  <div class="alert alert-danger">
   la Categorie n'existe pas
  </div>
@endif

@if ( session('probleme'))
  <div class="alert alert-danger">
   Un probleme est sur venue(La taille de L'image est trop grande)
  </div>
@endif
@if ( session('problemes'))
  <div class="alert alert-danger">
   Un probleme est sur venue(La taille de L'image est trop grande)
  </div>
@endif

@if ( session('success'))
  <div class="alert alert-success">
 Categorie suprimer  avec succes 
  </div>

@endif
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Liste des Categories </h4>
                  <p class="card-description">
                   Vous Avez la possibilite de <code>Modifier</code> ou delete une Categorie
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                        <th>
                            #
                          </th>
                          <th>
                            libelle
                          </th>
                          <th>
                           descriptions
                          </th>
                          <th>
                            photo
                          </th>
                          <th>
                            modifier
                          </th>
                          <th>
                            suprimer
                          </th>
                        </tr>
                      </thead>
                      @foreach($categorie as $categories)
                      <tbody>
                        <tr>
                        <td>
                        {{$categories->id}}
                          </td>
                          <td>
                          {{$categories->libelle}}
                          </td>
                          <td  class="py-3 px-4"  >
                          <a href="#"> <button type="button" class="btn btn-outline-dark bg-dark text-white">Voir </button>  </a>           
                          </td>
                           <td class="py-1">
                            <img src="images/Categorie/{{$categories->photo}}" alt=""> 
                           </td>
                          <td>
                               <a href="/Categorie_edit/{{$categories->slug}}">  <button type="button" class="btn btn-outline-primary">Modifier</button> </a> 
                          </td>
                          <td>
                               <a href="/Categorie_delete/{{$categories->slug}}">  <button type="button" class="btn btn-outline-danger">Suprimer</button> </a> 
                          </td>
                        </tr>
                      </tbody>
                     @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>

@endsection