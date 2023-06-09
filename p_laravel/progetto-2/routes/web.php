<?php

use App\Http\Controllers\PageController;
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

//utilizzando il Controller

Route::get('/',[PageController::class,'home']);

Route::get('/azienda',[PageController::class,'azienda']);

Route::get('/lista-destinazioni',[PageController::class,'destinazione']);

Route::get('/lista-destinazioni/{destinazione}',[PageController::class,'destinazioni']);

Route::get('/form-contatti',[PageController::class,'contatti']);
