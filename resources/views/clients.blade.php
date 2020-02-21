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
  
      <br><br>
      <h3 class="text-center">LISTES DES CLIENTS</h3>
      <div class="content">
         <div class="class row justify-content-center">
            <div class="col-md-8">
               <div class="class card">
                  <div class="card-body">
   
                     <ul>
   
                        @foreach ($clients as $client)

                        <div class="card m-4">
                           <div class="card-body m-1">
                              <div class="col-md-8">
                                 <div class="card border-info mb-3" style="max-width: 18rem;">
                                    <div class="card-header">INFORMATION DU CLIENT</div>
                                    <div class="card-body text-info">
                                       ID : {{ $client->id }} <br> Nom : {{ $client->nom }} <br> Prenom : {{ $client->prenom }} <br>
                                       <a href="/clients/{{ $client->id }}"><button class="btn btn-outline-info">Voir plus d'informations</button></a>
                                    </div>
                                  </div> 
                              </div>
                           </div>
                         </div>
               
                        @endforeach 
                        @endsection
                                      
                     {{-- {{ csrf_token() }} --}}
                     </ul>

                  </div>
               </div>
            </div>
         </div>

   <!-- SCRIPT -->
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>




