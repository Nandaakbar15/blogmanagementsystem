<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', 'App\Http\Controllers\WelcomeController@welcome');

// route view form page
Route::get('/form', 'App\Http\Controllers\FormController@viewForm');

// route check the validation
Route::post('/form', 'App\Http\Controllers\FormController@checkForm');

// route mengelola post
Route::prefix('post')->group(function() {
    Route::get('/datapost', 'App\Http\Controllers\PostController@index');
    Route::get('/viewformtambahpost', 'App\Http\Controllers\PostController@create');
    Route::post('/tambahpost', 'App\Http\Controllers\PostController@store');
    Route::get('/viewubahpost/{post}', 'App\Http\Controllers\PostController@edit');
    Route::put('/ubahpost/{post}', 'App\Http\Controllers\PostController@update');
    Route::delete('/hapusPost/{post}', 'App\Http\Controllers\PostController@destroy');
    Route::post('/cariPost', 'App\Http\Controllers\PostController@searchPost');
});