<?php

use Illuminate\Support\Facades\Route;
 use  App\Http\Controllers\SIteController;
 use App\Http\Controllers\UserCOntroller;


 Route::get("/", [UserCOntroller::class, 'message'])->name('message');




// Route::get('home', [SIteController::class, 'home'])->name('home');
// Route::get('about', [SIteController::class, 'about'])->name('about');


// Route::get("admin", [SIteController::class, 'admin'])->name('admin');

 
//  Route::get('/', function () {
//   return view('home');
//  });

 

// Route::prefix('admin')->name('site.')->group(function () {
//     Route::get('/home', function(){
//     return view('home');
//     })->name('home');
    
//     Route::get('/about', function () {
//         return view('about');
//     })->name('about');
// });