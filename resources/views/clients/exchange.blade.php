@extends('layouts.app')
@section('content')
<br><br><br>
<div class="content">
  <div class="row justify-content-center mr-5"><br>
     <div class="col-md-5">
                  
                  <h1 class="text-center">ECHANGES</h1>
                    <div class="card-body m-2">
                      <div class="d-flex justify-content-center">
                        <div class="card border-info col-12 mb-5" style="">
                              <div class="card-body text-info">

                              
                              <form action="/exchange" method="post">
                                  {{ csrf_field() }}
                                  <div class="form-group">
                                    <label for="exampleFormControlSelect1">Date</label>
                                  <input class="form-control" type="date" name="date" value="yyyy-mm-dd">
                                  </div>

                                  <div class="form-group"><br>
                                    <label for="exampleFormControlSelect1">Type de Contact</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="id_exchange_types">
                                    @foreach ($exchange_types as $exchange_type)
                                      <option value='{{$exchange_type->id}}'>{{$exchange_type->type}}</option>
                                     @endforeach
                                  </select>
                                  </div><br>

                                  <div class="form-group"><br>
                                    <label for="exampleFormControlSelect1">Operateurs</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="id_users">
                                    @foreach ($operateurs as $operateur)
                                      <option value='{{$operateur->id}}'>{{$operateur->nom}}</option>
                                    @endforeach
                                  </select>
                                  </div><br>

                                  <div class="form-group"><br>
                                    <label for="exampleFormControlSelect1">Clients</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="id_clients">
                                    @foreach ($clients as $client)
                                      <option value='{{$client->id}}'>{{$client->nom}}</option>
                                    @endforeach
                                  </select>
                                  </div><br>


                                  <div class="form-group">
                                      <label for="commentaire">Commentaire</label>
                                      <textarea class="form-control" id="commentaire" rows="3" name="commentaire"></textarea>
                                  </div>


                                  <a href="/clients/{{$client->commentaire}}/historic"><button class="btn btn-outline-info">Ajout</button></a>
                                
                              </form> 
                              @if(isset($ajouter))
                              </div>
                                    <p class="text-center">{{$ajouter}}</p>  
                            </div>
                            @endif
                      </div>
                    </div>
                  </div>
          
    </div>
  </div>
</div>

@endSection
