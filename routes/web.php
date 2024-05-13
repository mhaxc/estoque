<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('layouts.layout');
});

Route::resource('products', ProductController::class);

Route::get('/categories', CategoryController::class . '@index')->name('category.index');

Route::get('/categories/create', CategoryController::class . '@create')->name('category.create');

Route::post('/categories', CategoryController::class . '@store')->name('category.store');

Route::get('/categories/{category}', CategoryController::class . '@show')->name('category.show');

Route::get('/categories/{category}/edit', CategoryController::class . '@edit')->name('category.edit');

Route::put('/categories/{category}', CategoryController::class . '@update')->name('category.update');

Route::delete('/categories/{category}', CategoryController::class . '@destroy')->name('category.destroy');
