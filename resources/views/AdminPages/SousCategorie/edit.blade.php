@extends('dash/layout/app')

@section('content')

<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Modifier un Secteurs d'activité</h4>
                  <p class="card-description">
                  
                  </p>
                  <form  action="{{ url('/SousCategoriEdit/'.$souscat->slug) }}" method="POST" enctype="multipart/form-data">
                      @csrf 
                      @method('PUT')


                      <div class="form-row">
                                <div class="control-group col-sm-6">
                                    <input type="text" class="form-control p-3" value="{{ old($souscat->libelle)  ??  $souscat->libelle}}" id="name" placeholder="Titre" name="libelle"
                                        required="required" data-validation-required-message="svp entrer le nom" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control py-5 px-2" rows="6" value="{{ old($souscat->description)  ??  $souscat->description}}" id="message" placeholder="description" name="description"
                                    required="required"
                                    data-validation-required-message="Please enter your message">{{ old($souscat->description)  ??  $souscat->description}}</textarea>
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
                                <button class="btn btn-primary py-2 px-4  " type="submit" id="sendMessageButton">Valider</button>
                            </div>
                  </form>
                </div>
              </div>
            </div>

@endsection