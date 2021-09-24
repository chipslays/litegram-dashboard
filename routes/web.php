<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
})->name('pages.index');

Route::get('/messages', function () {
    return view('screens.messages');
})->name('screens.messages');

Route::get('/users', function () {
    return view('screens.users');
})->name('screens.users');

Route::get('/auth', function () {
    return view('pages.auth');
})->name('auth');
