<?php

use Illuminate\Support\Facades\Route;
//auth()->loginUsingId();
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

Route::get('/create/thread','ThreadController@create');
Route::get('/update/thread','ThreadController@edit');
Route::get('/delete/thread','ThreadController@destroy');