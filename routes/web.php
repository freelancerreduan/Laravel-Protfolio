<?php

use App\Http\Controllers\GreetingController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::get("/create" , [PostController::class, 'createPost']);

Route::post("/store", [PostController::class, 'ourStoreMethod'])->name(name: 'storeName');



// ====================================================================================

Route::get("hello{id}", action: [GreetingController::class , 'funny']);



Route::get('invoice/{id}/item/{iditems}', [GreetingController::class , 'invoiceID']);

// Route::get('invoice{id}/', [GreetingController::class, 'invoiceID']);



Route::get('invoice/{id?}', [GreetingController::class , 'invoice']);


Route::match(['get','post'],"/countries/" , [GreetingController::class , 'countries']);














