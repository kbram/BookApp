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
Route::resource('books', 'App\Http\Controllers\BookManagementController');
Route::get('book', 'App\Http\Controllers\BookManagementController@index');
Route::post('book/delete', 'App\Http\Controllers\BookManagementController@deleteRequest');

Route::resource('payments', 'App\Http\Controllers\PaymentManagementController', ['except' => ['index','show','delete']]);
Route::get('payment', 'App\Http\Controllers\PaymentManagementController@index');
Route::post('payment/delete', 'App\Http\Controllers\PaymentManagementController@deleteRequest');

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/dashboards', 'App\Http\Controllers\HomeController@index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/books', function () {
    return view('book.books');
})->name('books');

Route::middleware(['auth:sanctum', 'verified'])->get('/payments', function () {
    return view('payment.payments');
})->name('payments');

Route::view('/livewire', 'livewire');