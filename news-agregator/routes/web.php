<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\FetchController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/users/{name}', function($name) {
    return "Hello, $name";
});

Route::get('/about', function() {
    return view('about', ['content' => "It is 'Hello, World' project"]);
});

Route::resource('/category', CategoryController::class);
Route::resource('category.news', NewsController::class);

Route::resource('/auth', AuthController::class);

Route::resource('/feedback', FeedbackController::class);
Route::resource('/fetch', FetchController::class);