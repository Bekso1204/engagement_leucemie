<?php

use Illuminate\Support\Facades\Route;
use App\Http\ContactController;
use App\Http\PresentationController;

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

Route::get('/contact', function () {
    return view('contact');
})->name('contact.show');

Route::get('/presentation', function () {
    return view('presentation');
})->name('presentation.show');
