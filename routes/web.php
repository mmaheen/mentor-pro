<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\SiteController;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',[SiteController::class, 'index'])->name('index');
