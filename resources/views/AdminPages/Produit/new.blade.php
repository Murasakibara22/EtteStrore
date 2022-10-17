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
                  <h4 class="card-title">Produits</h4>
                  <p class="card-description">
                    Veuillez enregistrer un produit 
                  </p>
                  <form class="forms-sample" action="{{ route('addProd') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <div class="form-group">
                      <label for="exampleInputName1">libelle</label>
                      <input type="text" name="libelle" class="form-control" id="exampleInputName1" placeholder="libelle">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">type</label>
                      <input type="text" name="type" class="form-control" id="exampleInputEmail3" placeholder="Genre">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">prix</label>
                      <input type="text" name="prix" class="form-control" id="exampleInputPassword4" placeholder="prix">
                    </div>
                    <div class="form-group" name="souscategorie_id">
                      <label for="exampleSelectGender">souscategorie_id</label>
                        <select class="form-control" id="exampleSelectGender" name="souscategorie_id">
                        @foreach($souscat as $c)
                          <option value="{{$c->id}}" name="souscategorie_id">{{$c->libelle}}</option>
                          @endforeach
                        </select>
                      </div>


                      <input type="file" id="real-file" hidden="hidden" name="photo1" />
                            <button type="button" id="custom-button" name="photo1">choisir</button>
                            <span id="custom-text"> ajouter la photo du premier produit</span> </br></br>

                            <div class="form-group">
                      <label>File upload</label>
                      <input type="file" name="photo2" >
                    </div> </br></br>


                    <div class="form-group">
                      <label for="exampleInputCity1">qte_stock</label>
                      <input type="number" name="qte_stock" class="form-control" id="exampleInputCity1" placeholder="Quantite">
                    </div>
                    <div class="control-group">
                                <textarea class="form-control py-5 px-2" rows="6" value="" id="message" placeholder="Description" name="description"
                                    required="required"
                                    data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                     </div>

                     <input type="hidden" name="token" value="{{ csrf_token() }}" />

                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>

@endsection