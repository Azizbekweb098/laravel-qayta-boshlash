<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function() {
  return view('welcome');
});



Route::get('/welcome/{id?}', [UserController::class, 'index'])->name('welcome');


Route::prefix('admin')->group(function () {
  Route::get('welcome', function() {
    return view('home');
  });
});


Route::name('a.')->group( function() {
  Route::get('aziz', function() {
   return 'Salom';
  })->name('aziz');
});