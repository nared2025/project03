<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;

Route::get('/',[HomeController::class,'home'])->name('photos.home');
Route::resource('photos', PhotoController::class);
Route::get('/about', [PhotoController::class, 'about'])->name('photos.about');
Route::get('/contact', [PhotoController::class, 'contact'])->name('photos.contact');
?>