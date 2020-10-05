<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'FuquIo\Play\Controllers'], function()
{
    Route::get('test', 'MyController@test');
});
