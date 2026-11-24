<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('student-result', function () {
    return view('student.result.list');
});

Route::get('student', function () {
    return view('student.dashboard');
});

