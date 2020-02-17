<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// /**
//  * Acceuil
//  */
// Route::prefix('clients')->group(function () {
//     Route::get('/', function(){
//         return view('clients.clients');
//     });
// });

      
/**
* Clients
*/

    // Route::get('/clients', function(){
    //     $clients = App\Clients::all();
       
    //         return view('clients', [
    //         'clients' => $clients,
    //     ]);
    // });
    

// /**
//  * Clients
//  */
// Route::get('/clients', 'ClientsController@index');




Route::get('/welcome', function () {
    return view ('welcome');
});


Route::get('/clients', function () {
    $clients = App\ClientsModel::all();
    
    return view('clients', [

      'clients' => $clients,
    ]); 
});


Route::get('/clients/{id}', 'ClientsController@show');




// Route::get('/fiche', function() {
//     return view('fiche');
// });