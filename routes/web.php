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


Route::get('inlog', function () {
    return view('inlog');
});
Route::get('index', function () {
    return view('index');
});

Route::get('/muziek', function () {
    return view('muziek');
});

Route::get('/ranglijst', function () {
    return view('ranglijst');
});
Route::get('/contact', function () {
    return view('contact');
});

?>