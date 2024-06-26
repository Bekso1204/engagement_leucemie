<?php

use App\Http\Controllers\TemoignageController;
use App\Models\Lien;
use App\Models\Partenaire;
use Illuminate\Support\Facades\Route;
use App\Http\ContactController;
use App\Http\Controllers\PresentationController;
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
    $actions = Action::where('date', '>=', now())
        ->orderBy('date', 'asc')
        ->take(2)
        ->get();

    $temoignages = Temoignage::orderBy('date', 'desc')
        ->take(2)
        ->get();

    $actualites = Actualite::orderBy('date', 'desc')
        ->take(2)
        ->get();

    return view('accueil', compact('actions', 'temoignages', 'actualites'));
})->name('accueil');

Route::get('/donquoi', function () {
    return view('donquoi');
})->name('donquoi');

Route::get('/limiteage', function () {
    return view('limiteage');
})->name('limiteage');

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

Route::get('/presentation', [PresentationController::class, 'presentation'])->name('presentation');

Route::get('/adherer', function () {
    return view('adherer');
})->name('adherer');

Route::get('/actions', function () {
    $actions = Action::orderBy('date', 'desc')->get();
    return view('actions', compact('actions'));
})->name('actions');

Route::get('/action/{id}', function (string $id) {
    $action = Action::find($id);
    return view('action', compact('action'));
})->name('action');

Route::get('/actualites', function () {
    $actus = Actualite::orderBy('date', 'desc')->get();
    return view("actualites", compact("actus"));
})->name('actualites');

Route::get('/actualite/{id}', function (string $id) {
    $actu = Actualite::find($id);
    return view('actualite', compact('actu'));
})->name('actualite');
