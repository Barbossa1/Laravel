<?php

use Illuminate\Support\Facades\Route;

//admin
Route::get('/', [\App\Http\Controllers\NewsController::class, 'index']);
Route::group(['middleware' => 'auth'], function() {
    Route::group(['prefix' => 'account'], function () {
        Route::get('/', [\App\Http\Controllers\Account\IndexController::class, 'index'])
        ->name('account');
    });
    Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::resource('/news', \App\Http\Controllers\Admin\NewsController::class);
    });
});

//users
//Route::get('/', [\App\Http\Controllers\NewsController::class, 'index']);
Route::group(['prefix' => 'users'], function () {
   Route::resource('/', \App\Http\Controllers\Users\UsersController::class);
});

//categories
Route::get('/categories', [\App\Http\Controllers\CategoriesController::class, 'index'])
    ->name('categories');
Route::get('/categories/{id}', [\App\Http\Controllers\CategoriesController::class, 'show'])
    //->where('id', '\d+')
    ->name('categories.show');

//news
Route::get('/news', [\App\Http\Controllers\NewsController::class, 'index'])
    ->name('news');
Route::get('/news/{slug}', [\App\Http\Controllers\NewsController::class, 'show'])
    //->where('slug', '\w+')
    ->name('news.show');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');
Route::get('logout','Auth\LoginController@logout');

Route::get('/parser', [\App\Http\Controllers\ParserController::class], 'index');
