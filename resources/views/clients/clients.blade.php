<!doctype html>
<html lang="{{ config('app.locale') }}">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Laravel</title>
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
   </head>
   <body>
      @foreach($clients as $client)
         <h3>{{ $client->title }}</h3>
         <p>{{ $client->content }}</p>
      @endforeach
   </body>
</html>








{{-- @extends('layouts.app')
@section('content')
    

<h1 class="text-center mt-4">Listes de clients</h1>

<section class="container p-4 rounded-lg">
    {{ $clients ?? '' }}   

</section> 
@endsection --}}