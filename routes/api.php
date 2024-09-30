<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/
Route::get('/user', [UserController::class,'index']);
//Route::get('/user', [UserController::class,'show'])->name('user.show');
Route::post('/user',[UserController::class,'store']);
Route::get('/receta',[RecetaController::class,'index']);
Route::post('/receta',[RecetaController::class,'store']);
Route::get('/categoria',[CategoriaController::class,'index']);
Route::post('/categoria',[CategoriaController::class,'store']);