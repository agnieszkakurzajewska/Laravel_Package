<?php

Route::prefix('products')->group(function () {
    Route::get('/available', 'ProductsController@showAvailable');
    Route::get('/unavailable', 'ProductsController@showUnavailable');
    Route::get('/more-than-five', 'ProductsController@showPlentyAvailable');
    Route::delete('/{id}', 'ProductsController@deleteProduct');
    Route::patch('/{id}', 'ProductsController@updateProduct');
    Route::post('/add', 'ProductsController@addProduct');
});



