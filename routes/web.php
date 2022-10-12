<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\categoryController;
use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\admin\menuController;
use App\Http\Controllers\admin\tableController;
use App\Http\Controllers\admin\reservationController;
use App\Http\Controllers\admin\statusController;
use App\Http\Controllers\admin\locationController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\admin\specialController;





//FrontEnd Route
Route::get('/',[FrontendController::class,'index'])->name('web.home');
Route::get('/reservation/stepOne',[FrontendController::class,'stepOne'])->name('web.stepOne');
Route::post('/reservation/stepOne/store',[FrontendController::class,'stepOneStore'])->name('web.stepOne.store');
Route::get('/reservation/stepTwo',[FrontendController::class,'stepTwo'])->name('web.stepTwo');
Route::post('/reservation/stepTwo/store',[FrontendController::class,'stepTwoStore'])->name('web.stepTwo.store');




// dashboard
Route::get('/dashboard',[adminController::class,'dashboard'])->name('dashboard')->middleware('auth'); 

Route::middleware(['auth','admin'])->name('admin.')->prefix('admin')->group( function(){
         Route::resource('category', categoryController::class);
         Route::resource('menu', menuController::class);
         Route::resource('table', tableController::class);
         Route::resource('reservation', reservationController::class);
         Route::resource('status',statusController::class);
         Route::resource('location',locationController::class);
         Route::resource('special',specialController::class);
       
});


















require __DIR__.'/auth.php';
