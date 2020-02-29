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

use Illuminate\Support\Facades\Route;

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



Route::get('/', function(){
    return view ('accueil');
});


Route::get('/clients', function () {
    $clients = App\ClientsModel::all();
    
    return view('clients', [

      'clients' => $clients,
    ]); 
});


Route::prefix('clients')->group(function () {
    Route::get('/{id}', 'ClientsController@show');
    Route::get('/{id}/historic', 'ExchangesControllers@show');
});


Route::prefix('exchange')->group(function () {
    Route::get('/', 'ExchangesControllers@index');
    Route::post('/', 'ExchangesControllers@create');
    //Route::get('/{id}/historic', 'ExchangesControllers@show');
});

// Route::prefix('historique')->group(function () {
//     Route::get('/', 'ExchangesControllers@show');
// });