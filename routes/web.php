<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', function () {
    return view('Dashboard.pages.index');
});

Route::get('create', function () {
    return view('Dashboard.pages.product.create');
});

Route::get('list', function () {
    return view('Dashboard.pages.product.product-list');
});

Route::get('shop', function () {
    return view('theam.parth.shop');
});

Route::get('contact', function () {
    return view('theam.parth.about');
});