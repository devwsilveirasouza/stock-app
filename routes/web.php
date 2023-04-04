<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', HomeController::class);
Route::get('/user', [UserController::class,'index'])->name('user.index');
