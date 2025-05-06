<?php

use App\Http\Controllers\MasterController;
use App\Http\Controllers\registeretudiant;
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



Route::get('/etudiants', function () {
    return view('listeetudiant');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('/registeretudiant', [registeretudiant::class, 'register']);

Route::get('/etudiants', [registeretudiant::class, 'etudiants']);

Route::get('/masters', [MasterController::class, 'index']);
Route::post('/addmaster', [MasterController::class, 'store']);

Route::get('/postuler/{id}', [MasterController::class, 'get']);
