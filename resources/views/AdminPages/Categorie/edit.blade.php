@extends('dash/layout/app')

@section('content')

<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Modifier un Secteurs d'activité</h4>
                  <p class="card-description">
                  
                  </p>
                  <form  action="{{ url('/CategoriEdit/'.$categorie->slug) }}" method="POST" enctype="multipart/form-data">
                      @csrf 
                      @method('PUT')


                      <div class="form-row">
                                <div class="control-group col-sm-6">
                                    <input type="text" class="form-control p-3" value="{{ old($categorie->libelle)  ??  $categorie->libelle}}" id="name" placeholder="Titre" name="libelle"
                                        required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control py-5 px-2" rows="6" value="{{ old($categorie->description)  ??  $categorie->description}}" id="message" placeholder="description" name="description"
                                    required="required"
                                    data-validation-required-message="Please enter your message">{{ old($categorie->description)  ??  $categorie->description}}</textarea>
                                <p class="help-block text-danger"></p>
                            </div>

                            <input type="file" id="real-file" hidden="hidden" name="photo" />
                            <button type="button" id="custom-button" name="photo">choisir</button>
                            <span id="custom-text">{{ old($categorie->photo)  ??  $categorie->photo1}}</span>
                            
                            <input type="hidden" name="token" value="{{ csrf_token() }}" />
                            
                            <div class="text-center">
                                <button class="btn btn-primary py-2 px-4  " type="submit" id="sendMessageButton">Valider</button>
                            </div>
                  </form>
                </div>
              </div>
            </div>

@endsection