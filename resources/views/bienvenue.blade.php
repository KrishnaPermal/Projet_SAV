@extends('layouts.app')
@section('content')

<div class="jumbotron">
    <h1 class="display-4 text-center">Entreprise PAUL BOYER</h1>
    <p class="lead text-center">Bienvenue sur notre page S.A.V</p>
</div>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img width="100%" height="500px" src="{{ asset('images/Développement3.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img width="100%" height="500px"  src="{{ asset('images/Développement.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img width="100%" height="500px"  src="{{ asset('images/Développement2.jpg') }}" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

@endsection

