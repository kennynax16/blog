<?php

use Illuminate\Support\Facades\Route;


Route::get('/categories',[\App\Http\Controllers\MainController::class ,'index'])->name('index');
Route::get('/posts/create',[\App\Http\Controllers\MainController::class ,'create'])->name('create');
Route::post('/posts',[\App\Http\Controllers\MainController::class ,'store'])->name('store');
Route::get('/categories/{category}',[\App\Http\Controllers\MainController::class ,'show'])->name('show');
