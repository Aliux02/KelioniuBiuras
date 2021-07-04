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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/', [App\Http\Controllers\CustomerController::class, 'index']);
    Route::resource('customers', App\Http\Controllers\CustomerController::class);
    Route::resource('country', App\Http\Controllers\CountryController::class);
    Route::resource('town', App\Http\Controllers\TownController::class);
    Route::get('customers/{id}/travel', [App\Http\Controllers\CustomerController::class, 'travel'])->name('customers.travel');
});

Auth::routes(); //Galime panaikinti: registracijos route’ą: Auth::routes(['register' => false]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
