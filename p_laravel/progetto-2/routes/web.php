<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $array2 = [
        'forza',
        'tenacia',
        'sacrificio',
        'passione'
    ];
    return view('home',['homeEl'=>$array2]);
});
Route::get('/azienda', function () {
    return view('chisiamo');
});
Route::get('/lista-destinazioni', function () {
    $destinazioni = [
        'Roma', 
        'Milano', 
        'Bari', 
        'Amsterdam', 
        'Napoli', 
        'Praga'
    ];
    
    return view('destinazioni',['elementi'=>$destinazioni]);
});
Route::get('/form-contatti', function () {
    return view('contatti');
});
