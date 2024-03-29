<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\webController;

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

//Inicio da rota principal da website do ilidio
Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste',[webController::class,'teste'])->name('teste');

//Rota para enviar email
Route::post('/enviar_email',[webController::class,'enviar_email'])->name('enviar_email');
