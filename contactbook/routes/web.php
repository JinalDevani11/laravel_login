<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\login;

Route::any('/', [login::class,'Index']);
Route::any('/register',[login::class,'Register']);
Route::any('/dashboard',[login::class,'Dashboard']);
Route::any('/adddata',[login::class,'Adddata']);
Route::any('/logout',[login::class,'Logout']);