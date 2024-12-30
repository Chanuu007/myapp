<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/example', function () {
    return view('example'); // Refers to 'example.blade.php'
});*/

Route::get('/chnx', function () {
    $name = 'Chanuka';
    return view('chanuka', ['name' => $name]);
});
