@extends('dash/layout/app')

@section('content')

@if ( session('succes'))
  <div class="alert alert-success">
    utilisateurs modifier  avec succes 
  </div>

@endif

@if ( session('success'))
  <div class="alert alert-success">
    utilisateurs suprimer  avec succes 
  </div>

@endif
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Liste des utilisateurs </h4>
                  <p class="card-description">
                    Vous avez la possibilité de  <code>modifier</code> ou de <code>suprimer  </code> un utilisateur
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Photo de profile
                          </th>
                          <th>
                           Nom
                          </th>
                          <th>
                            prenom
                          </th>
                          <th>
                            role
                          </th>
                          <th>
                            email
                          </th>
                          <th>
                            Mobile
                          </th>
                          <th>
                            Modifier
                          </th>
                          <th>
                            Suprimer
                          </th>
        
                        </tr>
                      </thead>
                      @foreach($user as $u)
                      <tbody>
                        <tr>
                          <td class="py-2">
                            <img src="/images/equipe/{{$u->photo}}" alt="image" width="200px" height="100px"    data-bs-toggle="modal" data-bs-target="#exampleModal"/>

                            
                           <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <img src="/images/equipe/{{$u->photo}}" alt="im" width="80px" height="80px" >
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                
                                </div>
                              </div>
                            </div>
                          </div> -->
                          
                          </td>
                          <td>
                            {{$u->nom}}
                          </td>
                          <td>
                          {{$u->prenom}}
                          </td>
                          <td>
                          {{$u->role}}
                          </td>
                          <td>
                          {{$u->email}}
                          </td>
                          <td>
                          {{$u->mobile}}
                          </td> 
                       <td>
                               <a href="/Utilisateurs-edit/{{$u->slug}}">  <button type="button" class="btn btn-outline-primary">Modifier</button> </a> 
                          </td>
                          <td>
                               <a href="/Userdelete/{{$u->slug }}">  <button type="button" class="btn btn-outline-danger">Suprimer</button> </a> 
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