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

// Trang chu
Route::get('/', function () {
    return view('page.tnn-trang-chu');
});

// Trang gioi thieu chung
Route::get('thong-tin-chung', function () {
    return view('page.tnn-thong-tin-chung');
})->name('thong-tin-chung');

// Trang gioi thieu chung
Route::get('he-thong-giam-sat', function () {
    return view('page.tnn-he-thong-giam-sat');
})->name('he-thong-giam-sat');