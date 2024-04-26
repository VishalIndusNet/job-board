<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;


Route::get('/', function(){
    return view('index');
});

Route::group(['middleware'=>'guest'],function(){
Route::get('login',[AuthController::class,'login_view'])->name('login');
Route::post('login',[AuthController::class,'login'])->name('login');

Route::get('register',[AuthController::class,'register_view'])->name('register');
Route::post('register',[AuthController::class,'register'])->name('register');
});


Route::group(['middleware'=>'auth'],function(){
Route::get('home',[AuthController::class,'home'])->name('home');

Route::get('logout',[AuthController::class,'logout'])->name('logout');
});



