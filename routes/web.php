<?php

use Illuminate\Support\Facades\Route;
auth()->loginUsingId(3);
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

Route::get('/create/user','UserController@create');
Route::get('/update/user/{user}','UserController@edit');
Route::get('/delete/user/{user}','UserController@destroy');

/**Alternative 2
 * Route::get('/create/user','UserController@create')->middleware('can:create,App\User');
 * Route::get('/update/user/{user}','UserController@edit')->middleware('can:update,user');
 * Route::get('/delete/user/{user}','UserController@destroy')->middleware('can:delete,user');
 */