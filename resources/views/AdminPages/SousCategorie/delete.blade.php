@extends('dash.layout.app')

@section('content')

<form action="{{ url('/SousCategoriDelete/'.$souscat->slug) }}" method="POST">
    @csrf 
    @method('DELETE')

    <div class="alert alert-danger" role="alert">
  vous allez suprimer Cette Sous Categorie ? 
</div>

<div class="shadow-lg p-3 mb-5 bg-body rounded">Voulez vous vraiment suprimer cette Sous categorie ? ({{$souscat->libelle}})
<button type="submit"  class="btn btn-danger ">oui suprimer</button>
<a href="{{ url('/SousCategorie_list') }}"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">non fermer </button>  </a>  
</div>
</form>


@endsection