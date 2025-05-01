<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customerControll;
use App\Http\Controllers\productControll;
use App\Http\Controllers\StockControll;
use App\Http\Controllers\SuppliyersControll;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('index');
});

Route::resource('customer', customerControll::class );
Route::resource('product', productControll::class );
Route::resource('stock', StockControll::class );
Route::resource('suppliyers', SuppliyersControll::class );
Route::resource('category', CategoryController::class );
