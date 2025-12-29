<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', function () {
    return view('Dashboard.pages.index');
});

Route::get('shop', function () {
    return view('theam.parth.shop');
});

Route::get('contact', function () {
    return view('theam.parth.contactus');
});