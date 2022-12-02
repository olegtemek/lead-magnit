<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\IndexController as AdminIndexController;
use App\Http\Controllers\admin\PortfolioController;
use App\Http\Controllers\admin\QuestionController;
use App\Http\Controllers\front\IndexController;
use App\Http\Controllers\front\SendTo;
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
    Route::post('/send-data', [SendTo::class, 'send']);
});


Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', [AdminIndexController::class, 'index'])->name('home.index');
    Route::post('/setting/{id}', [AdminIndexController::class, 'update'])->name('home.update');
    Route::resource('/portfolio', PortfolioController::class);
    Route::resource('/question', QuestionController::class);
});

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'request'])->name('login.post');
