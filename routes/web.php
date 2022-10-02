<?php

use Illuminate\Support\Facades\Route;




// admin dashboard 
Route::get('dash', function(){
        return view('admin.master');  
});





Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth','admin'])->name('admin.')->prefix('admin')->group( function(){
              
});


require __DIR__.'/auth.php';
