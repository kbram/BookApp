<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::fallback('App\Http\Controllers\HomeController@index');

Route::get('/', function () {
    return view('auth/login');
});
Route::get('/home', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/books', function () {
    return view('books');
})->name('books');

Route::middleware(['auth:sanctum', 'verified'])->get('/payments', function () {
    return view('payments');
})->name('payments');

Route::view('/livewire', 'livewire');