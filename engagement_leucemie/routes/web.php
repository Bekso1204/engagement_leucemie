<?php

use App\Http\Controllers\AdhererController;
use App\Http\Controllers\TemoignageController;
use App\Models\Lien;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/template', function () {
    return view('template');
});

Route::get('/partenaires', function () {
    $partenaires = Partenaire::all();
    $liens = Lien::all();
    return view('partenaires', compact('partenaires', 'liens'));
})->name('partenaires');

Route::get('temoignages', [TemoignageController::class, 'show'])->name('temoignages');
Route::get('temoignage/{id}', [TemoignageController::class, 'temoignage'])->name('temoignage');

Route::get('/contact', 'ContactController@showForm')->name('contact.form');
Route::post('/contact', 'ContactController@submitForm')->name('contact.submit');

Route::get('/presentation', 'PresentationController@show')->name('presentation.show');

// Route pour les pages adherer
Route::resource('/adherer', AdhererController::class);