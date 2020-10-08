<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'FuquIo\Play\Controllers'], function()
{
    Route::get('test', 'MyController@test');

    Route::get('convert', 'MyController@convert');

    Route::post('order', 'OrderController@create');
});
