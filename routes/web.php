<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/school', function () {
    return '<script>alert("Hello from About Page!");</script>';
})->name('about');
Route::get('/contact', function(){
    return '<script>alert("Hello from Contact Page!");</script>';
})->name('contact');
