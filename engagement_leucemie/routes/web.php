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

Route::get('/template', function () {
    return view('template');
});
Route::get('/partenaires', function () {
    return view('partenaires');
})->name('partenaires');
Route::get('/temoignages', function () {
    return view('temoignages');
})->name('temoignages');

Route::get('/contact', 'ContactController@showForm')->name('contact.form');
Route::post('/contact', 'ContactController@submitForm')->name('contact.submit');

Route::get('/presentation', 'PresentationController@show')->name('presentation.show');
