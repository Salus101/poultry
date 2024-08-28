<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route for the pricing page
Route::get('/pricing', function () {
    return view('pricing');
});