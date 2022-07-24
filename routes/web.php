<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/livros', function () {
    return view('products');
});
Route::get('/contatos', function () {
    return view('contacts');
});
Route::get('/sobre', function () {
    return view('aboult');
});

