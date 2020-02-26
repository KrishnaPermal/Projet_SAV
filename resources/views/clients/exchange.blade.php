    @extends('layouts.app')
    @section('content')
 <br><br>
    <div class="content">
      <div class="class row justify-content-center">
         <div class="col-md-5">
            <div class="class card">
            

                  <ul>
                         <div class="card-body m-1">
                            <div class="col-md-8">
                               <div class="card border-info mb-3" style="max-width: 18rem;">
                                  <div class="card-header">ECHANGES</div>
                                  <div class="card-body text-info">
                                   
                                    <form action="/exchange" method="post">
                                      {{ csrf_field() }}

                                      <input type="date" name="date" value="yyyy-mm-dd">


                                      <div class="form-group"><br>
                                        <label for="exampleFormControlSelect1">Type de Contact</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="id_exchange_types">
                                        @foreach ($exchange_types as $exchange_type)
                                          <option href="#">{{$exchange_type->id}}</option>
                                        @endforeach
                                      </select>
                                      </div><br>

                                      <div class="form-group"><br>
                                        <label for="exampleFormControlSelect1">Operateurs</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="id_users">
                                        @foreach ($operateurs as $operateur)
                                          <option href="#">{{$operateur->id}}</option>
                                        @endforeach
                                      </select>
                                      </div><br>

                                      <div class="form-group"><br>
                                        <label for="exampleFormControlSelect1">Clients</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="id_clients">
                                        @foreach ($clients as $client)
                                          <option href="#">{{$client->id}}</option>
                                        @endforeach
                                      </select>
                                      </div><br>


                                      <div class="form-group">
                                          <label for="commentaire">Commentaire</label>
                                          <textarea class="form-control" id="commentaire" rows="3" name="commentaire"></textarea>
                                      </div>
                                     
                                      
                                      <a href="/clients/{{ $client->id}}/historic"><button class="btn btn-outline-info">Ajout</button></a> 
                                    </div>
                                    </form>

                                  </div>
                                </div> 
                            </div>
                         </div>  
                  </ul>
                  
              
            </div>
         </div>
      </div>
    </div>
     
    @endSection