<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogcontroller;
use App\Http\Controllers\usercontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/index', function () {
//     return view('index');
// });

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/index',[blogcontroller::class,'index']);
Route::post('/index',[blogcontroller::class,'store']);
Route::get('/display',[blogcontroller::class,'show']);
Route::get('/display/{id}',[blogcontroller::class,'destroy']);
Route::get('/editprofile/{id}',[blogcontroller::class,'edit']);
Route::post('/updateprofile/{id}',[blogcontroller::class,'update']);
Route::get('/register',[usercontroller::class,'index']);
Route::post('/register',[usercontroller::class,'store']);
Route::get('/login',[usercontroller::class,'login']);
Route::post('/loginauth',[usercontroller::class,'loginauth']);
Route::get('/display1',[usercontroller::class,'show']);
Route::get('/display1/{id}',[usercontroller::class,'destroy']);
Route::get('/display1/{id}',[usercontroller::class,'status']);








