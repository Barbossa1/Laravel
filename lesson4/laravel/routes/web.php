<?php

use Illuminate\Support\Facades\Route;

//admin
Route::get('/', [\App\Http\Controllers\NewsController::class, 'index']);
Route::group(['prefix' => 'admin'], function() {
    Route::resource('/news', \App\Http\Controllers\Admin\NewsController::class);
});

//users
//Route::get('/', [\App\Http\Controllers\NewsController::class, 'index']);
Route::group(['prefix' => 'users'], function () {
   Route::resource('/', \App\Http\Controllers\Users\UsersController::class);
});

//categories
Route::get('/categories', [\App\Http\Controllers\CategoryController::class, 'index'])
    ->name('categories');
Route::get('/categories/{id}', [\App\Http\Controllers\CategoryController::class, 'show'])
    ->where('id', '\d+')
    ->name('categories.show');

//news
Route::get('/news', [\App\Http\Controllers\NewsController::class, 'index'])
    ->name('news');
Route::get('/news/{slug}', [\App\Http\Controllers\NewsController::class, 'show'])
    ->where('slug', '\w+')
    ->name('news.show');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');
