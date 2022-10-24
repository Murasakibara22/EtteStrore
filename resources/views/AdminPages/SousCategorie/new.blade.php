@extends('dash/layout/app')

@section('content')


@if ( session('success'))
  <div class="alert alert-success">
   sauvegarder avec succès
  </div>

@endif

            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ajouter une Sous Categorie</h4>
                  <p class="card-description">
                  
                  </p>
                  <form  action="{{ route('addsouscat')}}" method="POST" enctype="multipart/form-data">
                      @csrf 
                      @method('POST')

                      <div class="form-row">
                                <div class="control-group col-sm-6">
                                    <input type="text" class="form-control p-3" value="" id="name" placeholder="libelle" name="libelle"
                                        required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control py-5 px-2" rows="6" value="" id="message" placeholder="Description" name="description"
                                    required="required"
                                    data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>

                         
                         <label for="exampleInputEmail1">Categories</label></br> </br>
                        <div class="custom_select" name="categorie_id">
                            <select name="categorie_id">
                            @foreach($categorie as $categories)
                            <option value="{{$categories->id}}" name="categorie_id" >{{$categories->libelle}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div> 

                            <input type="hidden" name="token" value="{{ csrf_token() }}" />
                            
                            <div class="text-center">
                                <button class="btn btn-primary py-2 px-4 " type="submit" id="sendMessageButton">Valider</button>
                            </div>
                  </form>
                </div>
              </div>
            </div>

@endsection