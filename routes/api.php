<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'v1', 'middleware' => 'throttle:100,1'], function () {
    Route::get('products', [\Service\Product\ProductController::class, 'index']);
    Route::post('product', [\Service\Product\ProductController::class, 'store']);
    Route::get('index', [\Service\Page\PageController::class, 'index']);
});
