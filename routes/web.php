<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index_content');
});



Route::get('/index', [HomeController::class, 'index']);
Route::get('/index', [HomeController::class, 'index_content']);
Route::get('/shop', [PagesController::class, 'shop']);
Route::get('/shop', [PagesController::class, 'shop_content']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/contact', [PagesController::class, 'contact_content']);




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
