<?php

use Illuminate\Support\Facades\Route;

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
    return view('Tamirlan Kadyrbekov');
});

Route::get('/1', function () {
    return "1";
});

Route::get('/post/{id}', function ($id) {
    return "Number is ". $id;
});

//Login 
Route::get('login/{name}/{pass?}', function ($name,$pass) {
    return "Username is ".$name." pass is ".$pass;
})->where(['pass'=>'[a-zA-Z0-9]+']);
