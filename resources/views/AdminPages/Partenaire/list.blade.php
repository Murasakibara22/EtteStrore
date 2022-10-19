@extends('dash/layout/app')

@section('content')

        @if ( session('succes'))
          <div class="alert alert-success">
            Partenaire modifier  avec succes 
          </div>

        @endif

        @if ( session('erreurr'))
          <div class="alert alert-dansger">
          Le partenaire indiquer n'existe pas 
          </div>
        @endif

        @if ( session('error'))
          <div class="alert alert-danger">
          un Probleme est survenue ( le partenaire existe deja )  </div>
        @endif

        @if ( session('err'))
          <div class="alert alert-danger">
          un champ n'est pas correctement remplis   </div>
        @endif
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Liste des Partenaires </h4>
                  <p class="card-description">
                    Vous avez la possibilité de  <code>modifier</code> ou de <code>suprimer  </code> un Partenaire
                  </p>
                  <div class="table-responsive">
                  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">nom</th>
      <th scope="col">email</th>
      <th scope="col">contact</th>
      <th scope="col">photo</th>
      <th scope="col">modifier</th>
      <th scope="col">suprimer</th>
    </tr>
  </thead>
  <tbody>
  @foreach($partenaire  as $part)
    <tr>
      <th scope="row">{{$part->id}}</th>
      <td>{{$part->nom}}</td>
      <td>{{$part->email}}</td>
      <td>{{$part->mobile}}</td>
      <td> 
          <img src="/images/partenaires/{{$part->photo}}" alt="image" width="100px" height="90px" />
      <td>
           <a href="/Partnaire_edit/{{$part->slug}}">  <button type="button" class="btn btn-outline-primary">Modifier</button> </a> 
         </td>
      <td>
         <a href="/Partnairedelete/{{$part->slug}}">  <button type="button" class="btn btn-outline-danger">Suprimer</button> </a> 
      </td>
    </tr>
@endforeach
  </tbody>
</table>


                  </div>
                </div>
              </div>
            </div>

@endsection