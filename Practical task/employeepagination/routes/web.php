<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeeecontroller;

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

Route::get('/', function () {
    return view('employee.index');
});
Route::get('/index', function () {
    return view('employee.index');
});
Route::get('/blank', function () {
    return view('employee.blank');
});

Route::get('/buttons', function () {
    return view('employee.buttons');
});Route::get('/component', function () {
    return view('employee.component');
});

Route::get('/form-advance', function () {
    return view('employee.form-advance');
});

Route::get('/form.', function () {
    return view('employee.form');
});
Route::get('/gallery', function () {
    return view('employee.gallery');
});
Route::get('/grid', function () {
    return view('employee.grid');
});
Route::get('/icons', function () {
    return view('employee.icons');
});

Route::get('/invoice', function () {
    return view('employee.invoice');
});


Route::get('/login', function () {
    return view('employee.login');
});
Route::get('/main', function () {
    return view('employee.main');
});


Route::get('/message-task', function () {
    return view('employee.message-task');
});
Route::get('/notification', function () {
    return view('employee.notification');
});
Route::get('/panel-tabs', function () {
    return view('employee.panel-tabs');
});
Route::get('/pricing.', function () {
    return view('employee.pricing');
});

Route::get('/progress', function () {
    return view('employee.progress');
});
Route::get('/social', function () {
    return view('employee.social');
});
// Route::get('/table', function () {
//     return view('employee.table');
// });
Route::get('/typography', function () {
    return view('employee.typography');
});
Route::get('/wizard', function () {
    return view('employee.wizard');
});
Route::get('/table',[employeeecontroller::class,'show']);




