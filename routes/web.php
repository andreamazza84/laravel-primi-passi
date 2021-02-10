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
    return view('welcome');
});

Route::get('/contacts', function(){
    return view('contacts');
});

Route::get('/about-us', function(){
    return view('about');
});

Route::get('/history', function(){
    return view('history');
});

Route::get('/tell-us', function(){
    return view('tell-us');
});
