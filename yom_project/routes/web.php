<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\admincontroller;


Route::get('/',[usercontroller::class,'Index']);
Route::get('/services',[usercontroller::class,'Services']);
Route::get('/clients',[usercontroller::class,'Clients']);
Route::get('/blog',[usercontroller::class,'Blog']);
Route::get('/about',[usercontroller::class,'About']);
Route::get('/work_3columns',[usercontroller::class,'Work3_columns']);
Route::get('/work_4columns',[usercontroller::class,'Work4_columns']);
Route::get('/contact',[usercontroller::class,'Contact']);


Route::any('/admin/',[admincontroller::class,'Index']);
Route::any('/admin/dashboard',[admincontroller::class,'Dashboard']);
Route::any('/admin/addadmin',[admincontroller::class,'Addadmin']);
Route::get('/admin/delete/{id}',[admincontroller::class,'Admindelete']);
Route::any('/admin/update/{id}',[admincontroller::class,'Updateadmin']);

Route::any('/admin/addslider',[admincontroller::class,'Addslider']);
Route::any('/admin/sliderdelete/{id}',[admincontroller::class,'Sliderdelete']);
Route::any('/admin/sliderupdate/{id}',[admincontroller::class,'Updateslider']);

Route::any('/admin/logout',[admincontroller::class,'Logout']);


