<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(UserController::class)->group(function(){
    Route::get('/' , 'login')->name('welcome');
    Route::post('/login' , 'login_store')->name('login_store');
    Route::get('/chat' , 'home')->name('home');
    // Route::get('/home/{id}' , 'go_home')->name('go_home');
    Route::get('/home/{id}' , 'window')->name('window');
});

Route::controller(MessageController::class)->group(function(){
    Route::post('/home/{user2_id}' , 'message_store')->name('m_store');
});
