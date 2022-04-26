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

Route::get('/', function() {
    return view('welcome');
});

Route::get('/users/{name}', function($name) {
    return "Hello, $name";
});

Route::get('/news', function() {
    return "article 1<br>article 2<br>article 3";
});

Route::get('/news/{id}', function($id) {
    return "article $id";
});

Route::get('/about', function() {
    return "It is 'Hello, World' project";
});