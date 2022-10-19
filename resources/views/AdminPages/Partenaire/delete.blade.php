@extends('dash.layout.app')

@section('content')

<form action="{{ url('/Partnairedele/'.$partenaire->slug) }}" method="POST">
    @csrf 
    @method('DELETE')

    <div class="alert alert-danger" role="alert">
  vous allez suprimer ce Partenaire ? 
</div>

<div class="shadow-lg p-3 mb-5 bg-body rounded">Voulez vous vraiment suprimer ce Partenaire? ({{$partenaire->nom}})
<button type="submit"  class="btn btn-danger ">oui suprimer</button>
<a href="{{ url('/Partnaire_list') }}"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">non fermer </button>  </a>  
</div>
</form>


@endsection