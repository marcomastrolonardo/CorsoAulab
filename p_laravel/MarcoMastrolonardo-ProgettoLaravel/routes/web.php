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
    return view('welcome');
});

//Ritoro di stringa
Route::get('/stringa', function () {
    return 'esempio';
});

//Ritorno di intero
Route::get('/intero', function () {
    return 69;
});

//Ritorno di elementi array.
Route::get('/arrayEl', function () {
    $arr = [1,2,'elemento array'];
    return $arr[2];
});
Route::get('/arrayElement', function () {
    $arr = [
        1,
        2,
        'elemento array' => 'elemento2 di array'];
    return $arr['elemento array'];
});


//Lezione2 LARAVEL
$nome = 'Francesco';


//{nome} o {cognome} fa capire a Laravel che sto passando una varibile.

//Nella pagina http://127.0.0.1:8000/saluta/mario/luigi
Route::get('/saluta/{nome}/{cognome}', function ($nome, $cognome) {
    return "ciao $nome il cui cognome è $cognome"; //"ciao mario il cui cognome è luigi"
});

//Somma
Route::get('/calcola/{n1}/{n2}', function ($n1, $n2) {
    return $n1+$n2; //22
});

Route::get('/salutare', function () {

    $frase1 = 'mario';
    $frase2 = 'luigi';

    $data = [
        'elemento1'=>$frase1,
        'elemento2'=>$frase2
    ];

    return view('salutare', $data);
});

//Dentro la rotta, stringa statica(/contatti) e variabile({nome}), passo il parametro alla funzione.
Route::get('/contatti/{nome}', function ($name) {
    $testo = 'Siamo in contatti boys';

    return view('contatti',['primo'=>$testo,'nome'=>$name]);
});

Route::get('/storia', function () {

    $array = [
        'Gennaio',
        'Febbraio',
        'Marzo'
    ];

    return view('storia',['mesi'=>$array]);
});

Route::get('/chi-siamo', function () {
    return view('chisiamo');
});

//Piccolo sito
    //3 rotte che si collegano alle "viste blaid"
        Route::get('/part1', function () {
            return view('Part1');
        });

        Route::get('/part2', function () {
            return view('Part2');
        });

        Route::get('/part3', function () {
            return view('Part3');
        });







