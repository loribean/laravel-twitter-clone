<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Auth::routes();

Route::get('/home', [\App\Http\Controllers\TweetsController::class, 'index'])->name('home');

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::post('/tweets', [\App\Http\Controllers\TweetsController::class, 'store']);

    Route::get('/tweets', [\App\Http\Controllers\TweetsController::class, 'index'])->name('home');
    
});

Route::get('/profiles/{user}',[\App\Http\Controllers\ProfilesController::class, 'show'])->name('profile');




