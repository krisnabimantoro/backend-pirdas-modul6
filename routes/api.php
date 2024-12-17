<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('/sensor', App\Http\Controllers\SensorMpu::class);

Route::get('/post', [App\Http\Controllers\SensorMpu::class, 'fetchData']);
Route::get('/latestdata', [App\Http\Controllers\SensorMpu::class, 'getLatestData']);