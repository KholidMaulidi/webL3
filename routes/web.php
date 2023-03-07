<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HommiesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\aboutUsController;

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

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/hommies', [HommiesController::class, 'hommies'])->name('hommies');

Route::prefix('/product')->group(function () {
    Route::get('/food', [ProductController::class, 'food'])->name('food');
    Route::get('/drink', [ProductController::class, 'drink'])->name('drink');
});

Route::get('/news/{id}', [NewsController::class, 'news']);

Route::prefix('/program')->group(function () {
    Route::get('/ultah', [ProgramController::class, 'ultah'])->name('ultah');
    Route::get('/ramadhan', [ProgramController::class, 'ramadhan'])->name('ramadhan');
});

Route::get('/AboutUs', [AboutUsController::class, 'AboutUs'])->name('AboutUs');

Route::resource('ContactUs', ContactUsController::class);
