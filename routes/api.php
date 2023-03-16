<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::name('user.')->group(function () {
    Route::prefix('/users')->group(
        function () {
            Route::get('', [UserController::class, 'index'])->name('index');
            Route::get('info/{id}', [UserController::class, 'show'])->name('show');
            Route::get('/trash', [UserController::class, 'trash'])->name('trash');
            Route::put('/restore', [UserController::class, 'restore'])->name('restore');
            Route::post('', [UserController::class, 'store'])->name('store');
            Route::put('', [UserController::class, 'update'])->name('update');
            Route::patch('', [UserController::class, 'update'])->name('update');
            Route::delete('', [UserController::class, 'destroy'])->name('destroy');
        }
    );
});
