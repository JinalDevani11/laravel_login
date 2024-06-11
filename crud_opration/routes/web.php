<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
Route::any('/',[usercontroller::class,'index']);
Route::get('/delete/{id}',[usercontroller::class,'delete']);
Route::any('/update/{id}',[usercontroller::class,'update']);

