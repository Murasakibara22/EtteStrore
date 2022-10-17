@extends('dash/layout/app')

@section('content')

<div class="col-lg-15 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Listes des Produits</h4>
                  <p class="card-description">
                     Confirmer  <code></code>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>N</th>
                          <th>Libelle</th>
                          <th>prix</th>
                          <th>qte_stock</th>
                          <th>description</th>
                          <th>souscategorie</th>
                          <th>Ajouter Le</th>
                          <th>modifier</th>
                          <th>Supprimer </th>
                        </tr>
                      </thead>
                    @foreach($produit as $produits)
                      <tbody>
                        <tr>
                          <td>
                            {{$produits->id}} 
                          </td>
                          <td>
                          {{$produits->libelle}}
                          </td>
                          <td>
                            {{$produits->prix}}
                          </td>
                          <td class="text-success"> 
                            <i class="ti-arrow-up">
                                 {{$produits->qte_stock}}
                            </i>
                        </td>

                        <td>
                               boutton description Ici
                          </td>
                          <td>
                                souscategorie Ici
                          </td>

                          <td>
                          {{ date('j M, Y', strtotime($produits->created_at)) }}
                          </td>

                          <td>
                               <a href="/Produit_edit/{{$produits->slug}}">  <button type="button" class="btn btn-outline-primary">Modifier</button> </a> 
                          </td>
                          <td>
                               <a href="/Produit_delete/{{$produits->slug}}">  <button type="button" class="btn btn-outline-danger">Supprimer</button> </a> 
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