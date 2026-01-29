<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/larabug-test', function () {
    throw new Exception('Larabug is working on DigitalOcean');
});
