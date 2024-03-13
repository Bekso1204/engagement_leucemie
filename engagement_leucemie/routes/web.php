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
<<<<<<< HEAD

Route::get('/donquoi', function () {
    return view('donquoi');
});

Route::get('/limiteage', function () {
    return view('limiteage');
});
=======
Route::get('/template', function () {
    return view('template');
});
>>>>>>> eef6f303cddc1ba2022dd67a2edae7f6945e5fe5
