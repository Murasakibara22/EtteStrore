@extends('dash.layout.app')



@section('content')

@if ( session('success'))
  <div class="alert alert-success">
   sauvegarder avec succès
  </div>

@endif


<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Modifer le Produit</h4>
                  <p class="card-description">
                    Vous allez modifier {{$produit->libelle}} 
                  </p>
                  <form class="forms-sample" action="{{ url('/ProduitEdit/'.$produit->slug) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                      <label for="exampleInputName1">libelle</label>
                      <input type="text" name="libelle" value="{{ old($produit->libelle) ?? $produit->libelle}}" class="form-control" id="exampleInputName1" placeholder="libelle">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">type</label>
                      <input type="text" name="type"  value="{{ old($produit->type) ?? $produit->type}}" class="form-control" id="exampleInputEmail3" placeholder="Genre">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">prix</label>
                      <input type="text" name="prix" value="{{ old($produit->prix) ?? $produit->prix}}" class="form-control" id="exampleInputPassword4" placeholder="prix">
                    </div>
                    <div class="form-group" name="souscategorie_id">
                      <label for="exampleSelectGender">souscategorie_id</label>
                        <select class="form-control" id="exampleSelectGender" name="souscategorie_id">
                        @foreach($souscat as $c)
                          <option value="{{$c->id}}" name="souscategorie_id">{{$c->libelle}}</option>
                          @endforeach
                        </select>
                      </div>


                      <input type="file" id="real-file" hidden="hidden" name="photo1"  value="{{ old($produit->photo1) ?? $produit->photo1}}"/>
                            <button type="button" id="custom-button" name="photo1"  value="{{ old($produit->photo1) ?? $produit->photo1}}">choisir</button>
                            <span id="custom-text"> {{ old($produit->photo1) ?? $produit->photo1}}</span> </br></br>

                            <div class="form-group">
                      <input type="file" name="photo2"  value="{{ old($produit->photo2) ?? $produit->photo2}}">
                    </div> </br></br>


                    <div class="form-group">
                      <label for="exampleInputCity1">qte_stock</label>
                      <input type="number" name="qte_stock" value="{{ old($produit->qte_stock) ?? $produit->qte_stock}}" class="form-control" id="exampleInputCity1" placeholder="Quantite">
                    </div>
                    <div class="control-group">
                                <textarea class="form-control py-5 px-2" rows="6" value="{{ old($produit->description) ?? $produit->description}}" id="message" placeholder="Description" name="description"
                                    required="required"
                                    data-validation-required-message="Please enter your message">{{ old($produit->description) ?? $produit->description}}</textarea>
                                <p class="help-block text-danger"></p>
                     </div>

                     <input type="hidden" name="token" value="{{ csrf_token() }}" />

                    <button type="submit" class="btn btn-primary me-2">Modifier</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>

@endsection