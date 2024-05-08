<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', 'App\Http\Controllers\HelloController@index');
Route::get('/article', 'App\Http\Controllers\ArticleController@index');
Route::post('/article/add', 'App\Http\Controllers\ArticleController@add');
Route::post('/article/delete/{id}', 'App\Http\Controllers\ArticleController@delete');