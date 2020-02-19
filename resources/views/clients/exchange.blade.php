
    @extends('layouts.app')
    @section('content')
 
   
    


    <form action="/exchange" method="post">
        {{ csrf_field() }}

        <input type="date" name="date" placeholder="Date">
        <input type="date" name="date" placeholder="Date">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Type de Contact
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                @foreach ($exchange_types as $exchange_type)
                <a class="dropdown-item" href="#">    {{$exchange_type->type}}</a>

            
              @endforeach

            </div>
          </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Commentaire</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        {{-- <input type="password" name="password" placeholder="Mot de passe">
        <input type="password" name="password_confirmation" placeholder="Mot de passe (confirmation)"> --}}
        <input type="submit" value="Ajout d'un échange">
    </form>
    
    @endSection