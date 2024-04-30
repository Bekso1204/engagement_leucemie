<?php

use App\Http\Controllers\ActionController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\LienController;
use App\Http\Controllers\PartenaireController;
use App\Http\Controllers\TemoignageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BureauController;
use App\Http\Controllers\FonctionController;


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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // Route pour les pages de gestion des partenaires
    Route::resource('/partenaire', PartenaireController::class);

    // Route pour les pages de gestion des liens des partenaires
    Route::resource('/lien', LienController::class);

    // Route pour les pages de gestion des temoignages
    Route::resource('/temoignage', TemoignageController::class);

    // Route pour les pages de gestion du bureau
    Route::resource('/bureau', BureauController::class);

    // Route pour la gestion des fonctions
    Route::resource('/fonction', FonctionController::class);

    // Route pour afficher le formulaire de modification d'un bureau
    Route::get('/bureau/{id}/edit', [BureauController::class, 'edit'])->name('bureau.edit');

    // Route pour mettre à jour les informations d'un bureau
    Route::put('/bureau/{id}', [BureauController::class, 'update'])->name('bureau.update');

    // Route pour supprimer un bureau
    Route::delete('/bureau/{id}', [BureauController::class, 'destroy'])->name('bureau.destroy');

    Route::get('/fonctions', [FonctionController::class, 'index'])->name('fonction.index');

    Route::delete('/fonctions/{id}', [FonctionController::class, 'destroy'])->name('fonction.destroy');
    Route::get('/fonctions/{id}/edit', [FonctionController::class, 'edit'])->name('fonction.edit');
    Route::put('/fonctions/{id}', [FonctionController::class, 'update'])->name('fonction.update');

    // Route pour les pages de gestion des actualités
    Route::resource('/actualite', ActualiteController::class);

    // Route pour les pages de gestion des actions
    Route::resource('/action', ActionController::class);
    Route::get('/action/addPicture/{id}', [ActionController::class, 'addPicture'])->name("action.addPicture");
    Route::put('/action/storePicture/{id}', [ActionController::class, 'storePicture'])->name("action.storePicture");
    Route::get('/action/showPictures/{action}', [ActionController::class, 'showPictures'])->name('action.showPictures');
    Route::get('/action/{action}/editPicture/{id}', [ActionController::class, 'editPicture'])->name('action.editPicture');
    Route::put('/action/{action}/updatePicture/{id}', [ActionController::class, 'updatePicture'])->name('action.updatePicture');
    Route::delete('/action/{action}/destroyPicture/{id}', [ActionController::class, 'destroyPicture'])->name('action.destroyPicture');
});

require __DIR__ . '/auth.php';
