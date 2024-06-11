<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registercontroller;

Route::any('/', [registercontroller::class,'Index']);
Route::any('/register', [registercontroller::class,'Register']);
Route::any('/dashboard', [registercontroller::class,'Dashboard']);
Route::any('/logout', [registercontroller::class,'Logout']);

