<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home', [UserController::class, 'home'])->middleware(['auth', 'verified'])->name('home');
Route::get('/dashboard', [UserController::class,'index'])->middleware(['auth', 'admin'])->name('dashboard');


Route::controller(CategoriesController::class)->group(function () {
    Route::get('/category/index', 'index')->name('category.index');
    Route::get('/category/create', 'create')->name('category.create');
    Route::POST('/category/store', 'store')->name('category.store');
    Route::get('/category/{id}/edit', 'edit')->name('category.edit');
    Route::put('/category/{id}', 'update')->name('category.update');
    Route::delete('/category/{id}', 'destroy')->name('category.destroy');
});


require __DIR__.'/auth.php';