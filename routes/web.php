<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', ProductController::class);

Route::get('/categories', CategoryController::class . '@index')->name('category.index');
// returns the form for adding a post
Route::get('/categories/create', CategoryController::class . '@create')->name('category.create');
// adds a post to the database
Route::post('/categories', CategoryController::class . '@store')->name('category.store');
// returns a page that shows a full post
Route::get('/categories/{category}', CategoryController::class . '@show')->name('category.show');
// returns the form for editing a post
Route::get('/categories/{category}/edit', CategoryController::class . '@edit')->name('category.edit');
// updates a post
Route::put('/categories/{category}', CategoryController::class . '@update')->name('category.update');
// deletes a post
Route::delete('/categories/{category}', CategoryController::class . '@destroy')->name('category.destroy');
