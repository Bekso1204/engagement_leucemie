<?php

use App\Http\Controllers\TemoignageController;
use App\Models\Lien;
use App\Models\Partenaire;
use Illuminate\Support\Facades\Route;
use App\Http\ContactController;
use App\Http\PresentationController;
use App\Models\Action;
use App\Models\Actualite;
use App\Models\Temoignage;

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
    return view('accueil');
});

Route::get('/template', function () {
    return view('template');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact.show');

Route::get('/partenaires', function () {
    $partenaires = Partenaire::all();
    $liens = Lien::all();
    return view('partenaires', compact('partenaires', 'liens'));
})->name('partenaires');

Route::get('temoignages', [TemoignageController::class, 'show'])->name('temoignages');
Route::get('temoignage/{id}', [TemoignageController::class, 'temoignage'])->name('temoignage');

Route::get('/presentation', function () {
    return view('presentation');
})->name('presentation.show');

Route::get('/adherer', function () {
    return view('adherer');
})->name('adherer');

Route::get('/actions', function () {
    $actions = Action::orderBy('date', 'desc')->get();
    return view('actions', compact('actions'));
})->name('actions');

Route::get('/action/{id}', function (string $id) {
    $action = Action::find($id);
    return view('action', compact( 'action' ) );
})->name('action');

Route::get('/actualites', function(){
    $actus = Actualite::orderBy('date', 'desc')->get();
    return view("actualites", compact( "actus" ) );
})->name('actualites');

Route::get('/actualite/{id}', function(string $id) {
    $actu = Actualite::find($id);
    return view('actualite', compact('actu'));
})->name('actualite');
