{{-- @extends('layouts.app')
@section('content')
@foreach ($exchanges as $exchange)
<p>
    {{$exchange->commentaire}}
</p>   
@endforeach
@endsection --}}

 
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
    
      <h3 class="text-center">Echanges</h3>
      <div class="content">
         <div class="class row justify-content-center">
            <div class="col-md-8">
               <div class="class card">
                  <div class="card-body">
   
                     <ul>
                           <div class="card-body m-1">
                              <div class="col-md-8">
                                 <div class="card border-info mb-3" style="max-width: 18rem;">
                                    <div class="card-header text-center">Historique</div>
                                       <div class="card-body text-info">

                                              @foreach ($exchanges as $exchange)
                                            <p>
                                                Date : {{$exchange->date}}<br>
                                                Type de contact : {{$exchange->id_exchange_types}}<br>
                                                Opérateurs : {{$exchange->id_users}}<br>
                                                Clients : {{$exchange->id_clients}}<br>
                                                Commentaire : {{$exchange->commentaire}}
                                            </p><hr>   
                                             @endforeach

                                       </div>
                                    </div> 
                                 </div>
                              </div>
                           </div>
                     </ul>

                  </div>
               </div>
            </div>
         </div>
         @endsection