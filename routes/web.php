<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/',                     [App\Http\Controllers\HomeController::class, 'landing'])->name('root');
Route::get('/home',                 [App\Http\Controllers\HomeController::class, 'landing'])->name('home');
Route::get('/index',                [App\Http\Controllers\HomeController::class, 'landing'])->name('index');
Route::get('/landing',              [App\Http\Controllers\HomeController::class, 'landing'])->name('landing');

Route::get('/services',             [App\Http\Controllers\HomeController::class, 'services'])->name('services');
Route::get('/portfolio-details',    [App\Http\Controllers\HomeController::class, 'portfolio'])->name('portfolio-details');
Route::get('/starter-page',         [App\Http\Controllers\HomeController::class, 'starter_page'])->name('starter-page');
