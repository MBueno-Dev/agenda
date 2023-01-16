<?php

use app\Http\Controllers\ContactController;
//use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', 'App\Http\Controllers\ContactController@index');
    Route::get('/contacts', 'App\Http\Controllers\ContactController@contacts');
    Route::get('/contacts/create', 'App\Http\Controllers\ContactController@create');
    Route::post('/contacts/store', 'App\Http\Controllers\ContactController@store');
    Route::get('/contacts/show/{id}', 'App\Http\Controllers\ContactController@show');
    Route::get('/contacts/edit/{id}', 'App\Http\Controllers\ContactController@edit');
    Route::post('/contacts/update/{id}', 'App\Http\Controllers\ContactController@update');
    Route::get('/contacts/delete/{id}', 'App\Http\Controllers\ContactController@delete');
    #Route::get('/404/', 'App\Http\Controllers\ContactController@p404');
});

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/signin', [UserController::class, 'signin']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/signup', [UserController::class, 'signup']);
Route::get('/logout', [UserController::class, 'logout']);
