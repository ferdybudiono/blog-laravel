<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;
use App\Http\Controllers\firstController;


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

Route::get('home', [myController::class, 'index']);
Route::get('posts', [firstController::class, 'index']);
Route::get('posts/create', [firstController::class, 'create']);
Route::get('/posts/{id}', 'PostController@show');
Route::get('posts/{id}', [firstController::class, 'show']);
Route::post('posts', [firstController::class, 'store']);