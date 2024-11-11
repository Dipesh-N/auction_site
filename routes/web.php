<?php

use Illuminate\Support\Facades\Route;

use App\Http\controllers\AuthController;


//Route::get('/', function () {
//    return view('posts.index');
//})->name('home');

//Route::get('/register', function () {
//    return view('auth.register');
//})->name('register');

Route::view('/', 'posts.index')->name('home');
Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/layout2', function () {return view('components.layout2');})->name('layout2');