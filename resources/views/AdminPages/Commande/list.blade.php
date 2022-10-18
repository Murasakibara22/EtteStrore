@extends('dash/layout/app')

@section('content')

<div class="col-lg-15 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Listes des Commandes</h4>
                  <p class="card-description">
                     Confirmer  <code></code>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>User</th>
                          <th>code</th>
                          <th>commande_id</th>
                          <th>ajouter à</th>
                          <th>Montant</th>
                          <th>modifier a</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      @foreach($commande as $order)
                      <tbody>
                        <tr>
                            <!--ici pour retourner tous les  utilisateurs aiyant passer des commandes -->
                          <td>{{$order->unn}}</td>
                          <td>{{$order->code}}</td>
                          <td class="text-danger"> {{$order->id}} <i class="ti-arrow-down"></i></td>
                          <td>{{$order->created_at}}</td>
                          <td>{{$order->montant}}</td>
                          <td>{{$order->updated_at}}</td>
                          <td>{{$order->status}}</td>
                          
                          <td>
                                    <form class="forms-sample" action="" method="PUT">
                                @csrf 
                                @method('PUT')
                                <button type="submit" class="btn btn-success me-2">Terminer</button>
                                </form>
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