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
Route::get('dang-ky', function () {
    return view('page.tnn-dang-ky');
})->name('dang-ky');

Route::group([
    'name' => 'he-thong-giam-sat',
    'prefix' => 'he-thong-giam-sat',
], function () {
    // Trang he thong giam sat
    Route::get('/', 'App\Http\Controllers\MonitoringSystemController@index')->name('he-thong-giam-sat');
    // Trang he thong giam sat thuy dien, mua
    Route::get('mua', function () {
        return view('page.he-thong-giam-sat.tnn-he-thong-giam-sat-thuy-dien-mua');
    })->name('he-thong-giam-sat-thuy-dien-mua');
});

// Trang bao cao bieu mau
Route::get('bao-cao-bieu-mau', function () {
    return view('page.tnn-bao-cao-bieu-mau');
})->name('bao-cao-bieu-mau');


Route::group([
    'name' => 'quan-ly-cap-phep',
    'prefix' => 'quan-ly-cap-phep',
], function () {
    // Trang quan ly cap phep
    Route::get('/', 'App\Http\Controllers\SurfaceWaterConstructionsController@index')->name('quan-ly-cap-phep');

    Route::get('nuoc-mat', function () {
        return view('page.quan-ly-cap-phep.tnn-quan-ly-cap-phep-nuoc-mat');
    })->name('quan-ly-cap-phep-nuoc-mat');

    // Tom tat thong tin nuoc mat
    Route::get('nuoc-mat/{id}', 'App\Http\Controllers\SurfaceWaterConstructionsController@summaryInfo')->name('thong-tin-tom-tat-quan-ly-cap-phep-nuoc-mat');

    Route::get('nuoc-mat/cong-trinh-dau-moi', function () {
        return view('page.quan-ly-cap-phep.tnn-nuoc-mat-cong-trinh-dau-moi');
    })->name('nuoc-mat-cong-trinh-dau-moi');

    Route::get('xa-thai-nguon-nuoc', function () {
        return view('page.quan-ly-cap-phep.tnn-quan-ly-cap-phep-xa-thai-nguon-nuoc');
    })->name('quan-ly-cap-phep-xa-thai-nguon-nuoc');

    Route::get('nuoc-duoi-dat', function () {
        return view('page.quan-ly-cap-phep.tnn-quan-ly-cap-phep-nuoc-duoi-dat');
    })->name('quan-ly-cap-phep-nuoc-duoi-dat');
    
    Route::get('nuoc-duoi-dat/ky-thuat-cong-trinh', function () {
        return view('page.quan-ly-cap-phep.tnn-nuoc-duoi-dat-ky-thuat-cong-trinh');
    })->name('nuoc-duoi-dat-ky-thuat-cong-trinh');
});