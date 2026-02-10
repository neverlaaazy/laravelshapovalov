<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/second',[MainController::class,'show1']);

Route::get('/home',[MainController::class, 'showIndex'])->name('home');

Route::get('/array',[MainController::class, 'showArray'])->name('array');