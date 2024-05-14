<?php

use App\Http\Controllers\BulkController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardControllerController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// Route::get('/', function () {
//     return view('dashboard.dashboard');
// });


Route::resource('/', DashboardController::class);

Route::resource('products', ProductController::class);
//categoria

Route::get('/categories', CategoryController::class . '@index')->name('category.index');

Route::get('/categories/create', CategoryController::class . '@create')->name('category.create');

Route::post('/categories', CategoryController::class . '@store')->name('category.store');

Route::get('/categories/{category}', CategoryController::class . '@show')->name('category.show');

Route::get('/categories/{category}/edit', CategoryController::class . '@edit')->name('category.edit');

Route::put('/categories/{category}', CategoryController::class . '@update')->name('category.update');

Route::delete('/categories/{category}', CategoryController::class . '@destroy')->name('category.destroy');

//bulks

Route::get('/bulks', BulkController::class . '@index')->name('bulk.index');

Route::get('/bulks/create', BulkController::class . '@create')->name('bulk.create');

Route::post('/bulks', BulkController::class . '@store')->name('bulk.store');

Route::get('/bulks/{bulks}', BulkController::class . '@show')->name('bulk.show');

Route::get('/bulks/{bulks}/edit', BulkController::class . '@edit')->name('bulk.edit');

Route::put('/bulks/{bulks}', BulkController::class . '@update')->name('bulk.update');

Route::delete('/bulks/{bulks}', BulkController::class . '@destroy')->name('bulk.destroy');

