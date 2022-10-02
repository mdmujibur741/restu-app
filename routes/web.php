<?php

use App\Http\Controllers\admin\categoryController;
use App\Http\Controllers\admin\menuController;
use App\Http\Controllers\admin\reservationController;
use App\Http\Controllers\admin\tableController;
use Illuminate\Support\Facades\Route;




// admin dashboard 






Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('dashboard', function(){
    return view('admin.master');  
});  

Route::middleware(['auth','admin'])->name('admin.')->prefix('admin')->group( function(){
         Route::resource('category', categoryController::class);
         Route::resource('menu',menuController::class);
         Route::resource('table', tableController::class);
         Route::resource('reservation',reservationController::class);
});


require __DIR__.'/auth.php';
