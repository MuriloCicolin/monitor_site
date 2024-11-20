<?php

use Illuminate\Support\Facades\Route;

Route::get('murilo', function () {
    echo 'Ok';
});

Route::get('/', function () {
    return view('welcome');
});
