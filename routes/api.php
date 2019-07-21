<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/meta', function () {
    return [
        'item1' => '%d domains',
        'number1' => 4,
        'item2' => '%d microsites',
        'number2' => 8,
        'info' => 'CUSTOM designs',
    ];
});
