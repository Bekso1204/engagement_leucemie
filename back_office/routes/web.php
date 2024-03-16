<?php

use App\Http\Controllers\PartenaireController;
use App\Models\Partenaire;
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

// Route pour la page d'accueil
Route::get('/', function () {
    return view('template');
});

// Route pour les pages de gestion des partenaires
Route::resource('/partenaire', PartenaireController::class);
