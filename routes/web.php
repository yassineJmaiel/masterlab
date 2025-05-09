<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\InterestController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\registeretudiant;
use App\Models\Interest;
use Illuminate\Support\Facades\Auth; 
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

Route::get('/ajouter-master', function () {
    return view('ajouter-master');
});

Route::get('/ajouter-interet', function () {
    return view('ajouter-interet');
});


Route::get('/etudiants', function () {
    return view('listeetudiant');
});


Route::get('/chatform', function () {
    return view('chatform');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('/registeretudiant', [registeretudiant::class, 'register']);

Route::get('/etudiants', [registeretudiant::class, 'etudiants']);

Route::get('/masters', [MasterController::class, 'index']);
Route::post('/addmaster', [MasterController::class, 'store']);

Route::get('/postuler/{id}', [MasterController::class, 'get']);
Route::post('/postuler', [ApplicationController::class, 'store']);
Route::get('/mescondidatures', [ApplicationController::class, 'mesapp']);
Route::get('/listcandidatures', [ApplicationController::class, 'listcandidatures']);

Route::get('/affichercandidature/{id}', [ApplicationController::class, 'affichercandidature']);

Route::get('/mesinterets', [InterestController::class, 'mesinterets']);



Route::get('accepter/{id}', [ApplicationController::class, 'accepter'])->name('candidature.accepter');
Route::get('refuser/{id}', [ApplicationController::class, 'refuser'])->name('candidature.refuser');

Route::post('/addinterest', [InterestController::class, 'addinterest']);

Route::delete('/interets/{id}', [InterestController::class, 'destroy'])->name('interets.destroy');

use App\Http\Controllers\PredictionController;

Route::post('/predict', [PredictionController::class, 'predict'])->name('predict');