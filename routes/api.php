<?php
use App\Http\Controllers\Api\OrderApiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;


// Public route for login
Route::post('login', [AuthController::class, 'login']);

// Protected route
Route::middleware('auth:api')->group(function () {
    // Other protected routes can go here
    Route::get('/profile', function (Request $request) {
        return response()->json([
            'user' => $request->user(),
        ]);
    });
    

    // Logout route (revoke the access token)
    Route::post('/logout', [AuthController::class, 'logout']);
});
Route::name('order.')->prefix('order')->group(function() {
    Route::get('/', [OrderApiController::class, 'index'])->name('index');
    Route::post('store', [OrderApiController::class, 'store'])->name('store');
    Route::get('edit/{id}', [OrderApiController::class, 'edit'])->name('edit');
    Route::post('update', [OrderApiController::class, 'update'])->name('update');
    Route::get('destroy/{id}', [OrderApiController::class, 'destroy'])->name('destroy');
});