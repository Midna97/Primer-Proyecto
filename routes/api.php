<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RecetaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\RolesController;

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/
Route::get('/user', [UserController::class,'index']);
Route::get('/user/{id}', [UserController::class,'show'])->name('user.show');
Route::post('/user',[UserController::class,'store']);
Route::get('/receta/{id}',[RecetaController::class,'show']);
Route::get('/receta',[RecetaController::class,'index']);
Route::post('/receta',[RecetaController::class,'store']);
Route::get('/categoria',[CategoriaController::class,'index']);
Route::post('/categoria',[CategoriaController::class,'store']);
Route::get('/roles/{id}',[RolesController::class,'show']);
Route::get('/roles',[RolesController::class,'index']);
Route::post('/roles',[RolesController::class,'store']);