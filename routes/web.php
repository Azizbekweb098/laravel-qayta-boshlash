<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/userw', function() {
    return 'Salom';
});

Route::get('/users/{id?}', function($id = null) {
    return 'Salom ' . $id;
});

Route::get('/user/{id?}', function($id = null) {
    return view('home', compact('id'));
});

Route::get('/userl/{id?}', [UserController::class, 'index']);


Route::prefix('admin')->group(function () {
  Route::get('user/{id?}', function ($id = null) {
    return view('home', compact('id'))->name('user');
  });
});

Route::get('/users/{user?}', function (User $user) {
    return $user->email;
});