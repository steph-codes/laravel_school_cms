<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });
//use Action Syntax to avoid controller doesnt exist


//Using String Syntax

Route::get('/',"StudentController@index");
Route::get('/edit/{id}',"StudentController@edit");
Route::get('/show/{id}',"StudentController@show");
Route::get('/create',"StudentController@create");
Route::post('/store',"StudentController@store");
Route::post('/update/{id}',"StudentController@update");


// A. Action syntax for laravel 8 and above
// Route::get('/',[StudentController::class, 'index']);
// Route::get('/edit/{id}',[StudentController::class, 'edit']);
// Route::get('/show/{id}',[StudentController::class, 'show']);
// Route::post('/create',[StudentController::class, 'create']);
// Route::post('/store',[StudentController::class, 'store']);
// Route::post('/update/{id}',[StudentController::class, 'update']);

// B. manual namespace on RoutesServiceProvider.php
// add the ffg at the top of the public function boot
// protected $namespace = 'App\Http\Controllers';

// C. Use Full namespace i.e Add the path leading to ur controller manually (prefex this before the controller name -- App\Http\Controllers\)
// Route::post('/update/{id}',"App\Http\Controllers\StudentController@update");



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
