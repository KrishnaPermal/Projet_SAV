<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>SAV</title>

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!--CSS--> 
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>


<br>
<body>
   
   @extends('layouts.app')
   @section('content')
    
      <h3 class="text-center">Echanges</h3><br>
      <div class="content">

       <ul>  
         <div class="row justify-content-center mr-5">
            <div class="col-md-5">
               <div class="class card">
                  <div class="card-body">
                                 
                     <div class="d-flex justify-content-center">
                        <div class="card border-info col-12 mb-5">
                           <div class="card-header text-center">Historique</div>
                              <div class="card-body text-info">

                                 @foreach ($exchanges as $exchange)
                                    <p>
                                       Date : {{$exchange->date}}<br>
                                       Type de contact : {{$exchange->id_exchange_types}}<br>
                                       Opérateurs : {{$exchange->id_users}}<br>
                                       Clients : {{$exchange->id_clients}}<br><hr>
                                       Commentaire : {{$exchange->commentaire}}
                                    </p><hr>   
                                 @endforeach

                              </div>
                           </div> 
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </ul>
   @endsection