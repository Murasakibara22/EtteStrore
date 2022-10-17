@extends('dash.layout.app')

@section('content')

<form action="{{ url('/CategoriDelete/'.$categorie->slug) }}" method="POST">
    @csrf 
    @method('DELETE')

    <div class="alert alert-danger" role="alert">
  vous allez suprimer Cette Categorie ? 
</div>

<div class="shadow-lg p-3 mb-5 bg-body rounded">Voulez vous vraiment suprimer cette categorie ? ({{$categorie->libelle}})
<button type="submit"  class="btn btn-danger ">oui suprimer</button>
<a href="{{ url('/Secteurs_list') }}"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">non fermer </button>  </a>  
</div>
</form>


@endsection