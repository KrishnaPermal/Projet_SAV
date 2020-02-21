    @extends('layouts.app')
    @section('content')
 <br><br>
    <div class="content">
      <div class="class row justify-content-center">
         <div class="col-md-8">
            <div class="class card">
               <div class="card-body">

                  <ul>
                         <div class="card-body m-1">
                            <div class="col-md-8">
                               <div class="card border-info mb-3" style="max-width: 18rem;">
                                  <div class="card-header">ECHANGES</div>
                                  <div class="card-body text-info">
                                   
                                    <form action="/exchange" method="post">
                                      {{ csrf_field() }}

                                      <input type="date" name="date" placeholder="Date">

                                      <div class="dropdown"><br><br>
                                          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Type de Contact
                                          </button>
                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                              @foreach ($exchange_types as $exchange_type)
                                              <a class="dropdown-item" href="#">{{$exchange_type->type}}</a>
                                              @endforeach
                                          </div>
                                      </div><br>

                                      <div class="dropdown">
                                          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Operateurs
                                          </button>
                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                              @foreach ($operateurs as $operateur)
                                              <a class="dropdown-item" href="#">{{$operateur->nom}}</a>
                                             @endforeach
                                          </div>
                                      </div><br>

                                      <div class="dropdown">
                                          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Client
                                          </button>
                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                              @foreach ($clients as $client)
                                              <a class="dropdown-item" href="#">{{$client->nom}}</a>
                                              @endforeach
                                          </div>
                                      </div><br>

                                      <div class="form-group">
                                          <label for="exampleFormControlTextarea1">Commentaire</label>
                                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                      </div>
                                     
                                      <input type="submit" value="Ajout d'un échange">
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
    </div>
     
    @endSection