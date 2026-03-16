<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function () {
    return redirect('/success');
});

Route::get('/success', function () {
    return view('success');
});