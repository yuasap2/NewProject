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

Route::get('/', [ContactController::class,'index'])->name('index');
//確認ページ
Route::get('/confirm', [ContactController::class,'confirm']);
Route::post('/comfirm', [ContactController::class,'confirm'])->name('confirm');
//送信完了ページ
Route::get('/thanks',[ContactController::class,'send']);
Route::post('/thanks',[ContactController::class,'send'])->name('send');