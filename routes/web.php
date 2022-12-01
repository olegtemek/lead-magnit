<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\IndexController as AdminIndexController;
use App\Http\Controllers\front\IndexController;
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

Route::group(['as' => 'front.'], function () {
    Route::get('/', [IndexController::class, 'index'])->name('home.index');
});


Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', [AdminIndexController::class, 'index'])->name('home.index');
});

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'request'])->name('login.post');
