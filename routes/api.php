<?php
use App\Http\Controllers\Api\OrderApiController;
use Illuminate\Support\Facades\Route;


Route::name('order.')->prefix('order')->group(function() {
    Route::get('/', [OrderApiController::class, 'index'])->name('index');
    Route::post('store', [OrderApiController::class, 'store'])->name('store');
    Route::get('edit/{id}', [OrderApiController::class, 'edit'])->name('edit');
    Route::post('update', [OrderApiController::class, 'update'])->name('update');
    Route::get('destroy/{id}', [OrderApiController::class, 'destroy'])->name('destroy');
});