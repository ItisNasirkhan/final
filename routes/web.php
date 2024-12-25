<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;

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


// Index (List all resources)
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

// Create (Show form to create a new resource)
Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');

// Store (Handle the form submission and save the new resource)
Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');

// Show (Display a single resource)
Route::get('/admin/{id}', [AdminController::class, 'show'])->name('admin.show');

// Edit (Show form to edit an existing resource)
Route::get('/admin/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit');

// Update (Handle the form submission and update the resource)
Route::put('/admin/{id}', [AdminController::class, 'update'])->name('admin.update');

// Destroy (Delete a resource)
Route::delete('/admin/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');



// Index (List all resources)
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

// Create (Show form to create a new resource)
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');

// Store (Handle the form submission and save the new resource)
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');

// Show (Display a single resource)
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');

// Edit (Show form to edit an existing resource)
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');

// Update (Handle the form submission and update the resource)
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');

// Destroy (Delete a resource)
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');






Route::get('/product/search', [AdminController::class, 'searchServices'])->name('product.search');

//api routes

Route::name('order.')->prefix('order')->group(function() {
    Route::get('/', [OrderController::class, 'index'])->name('index');
    Route::get('create', [OrderController::class, 'create'])->name('create');
    Route::post('store', [OrderController::class, 'store'])->name('store');
    Route::get('edit/{id}', [OrderController::class, 'edit'])->name('edit');
    Route::post('update', [OrderController::class, 'update'])->name('update');
    Route::get('destroy/{id}', [OrderController::class, 'destroy'])->name('destroy');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
