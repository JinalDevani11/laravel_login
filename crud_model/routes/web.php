<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registercontroller;

Route::any('/', [registercontroller::class,'Index']);
Route::get('/delete/{id}', [registercontroller::class,'Delete']);
Route::any('/update/{id}', [registercontroller::class,'Update']);
