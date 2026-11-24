<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');



Route::get('/Contact', function() {
    return view('Contact');
})->name('Contact');


Route::get('/AboutMe', function() {
    return view('AboutMe');
})->name('AboutMe');