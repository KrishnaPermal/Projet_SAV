@extends('layouts.app')
@section('content')

<div class="jumbotron jumbotron-fluid">
  <div class="bg"></div>
		<div class="container-fluid text-center">
        <h1 class="display-4 text-center">PAUL BOYER & Co</h1>
        <p class="lead text-center">Bienvenue sur notre page S.A.V</p>
    </div>
</div>

<h1 class="text-center">Service Après-Vente :</h1>
  <div class="container container-fluid">
    <div class="card-group p-5">

      <div class="col mb-2">
        <div class="card border-info pt-2">
          <div class="card-body">
            <h5 class="card-title">Telephone :</h5>
            <p class="card-text">0262 36 20 06 <br> Ouvert du Lundi au Jeudi de 9h à 19h <br> Vendredi & Samedi de 9h à 20h <br> Dimanche : 9h à 18h</p>
          </div>
        </div>
      </div>

      <div class="col mb-2">
        <div class="card border-info pt-2">
          <div class="card-body">
            <h5 class="card-title">Email :</h5>
            <p class="card-text">Vous pouvez nous envoyer votre message et nous vous répondrons dans les plus brefs délais. <br> Veuillez nous contacter à l'adresse suivante : <a href="mailto:paulboyer.contactsav@gmail.com">paulboyer.contactsav@gmail.com</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

