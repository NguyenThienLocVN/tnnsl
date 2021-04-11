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


// Trang gioi thieu chung
Route::get('thong-tin-chung', function () {
    return view('page.tnn-thong-tin-chung');
})->name('thong-tin-chung');

Route::get('/dang-ky', function () {
    return view('page.tnn-dang-ky');
})->name('dang-ky');

Route::group(['middleware' => 'auth'], function () {
    // Trang chu
    Route::get('/', function () {
        return view('page.tnn-trang-chu');
    });

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

        Route::get('nuoc-mat/xem-tat-ca-cong-trinh', 'App\Http\Controllers\SurfaceWaterConstructionsController@viewAll')->name('nuoc-mat-xem-tat-ca');
        Route::get('nuoc-mat/xem-tat-ca/thuy-dien', 'App\Http\Controllers\SurfaceWaterConstructionsController@viewAllHydroConstruction')->name('nuoc-mat-xem-tat-ca-thuy-dien');
        Route::get('nuoc-mat/xem-tat-ca/thuy-loi', 'App\Http\Controllers\SurfaceWaterConstructionsController@viewAllIrrigationConstruction')->name('nuoc-mat-xem-tat-ca-thuy-loi');
        Route::get('nuoc-mat/xem-tat-ca/cong-trinh-khac', 'App\Http\Controllers\SurfaceWaterConstructionsController@viewAllPumpConstruction')->name('nuoc-mat-xem-tat-ca-cong-trinh-khac');

        Route::get('nuoc-mat/cong-trinh-dau-moi', function () {
            return view('page.quan-ly-cap-phep.tnn-nuoc-mat-cong-trinh-dau-moi');
        })->name('nuoc-mat-cong-trinh-dau-moi');

        Route::get('nuoc-mat/{id}', 'App\Http\Controllers\SurfaceWaterConstructionsController@surfacewaterConstructionInfo')->name('quan-ly-cap-phep-nuoc-mat');
        Route::get('thong-tin-nuoc-mat/{id}', 'App\Http\Controllers\SurfaceWaterConstructionsController@surfacewaterInfoForLoading');

        Route::get('xa-thai-nguon-nuoc', function () {
            return view('page.quan-ly-cap-phep.tnn-quan-ly-cap-phep-xa-thai-nguon-nuoc');
        })->name('quan-ly-cap-phep-xa-thai-nguon-nuoc');

        Route::get('nuoc-duoi-dat', function () {
            return view('page.quan-ly-cap-phep.tnn-quan-ly-cap-phep-nuoc-duoi-dat');
        })->name('quan-ly-cap-phep-nuoc-duoi-dat');
        
        Route::get('nuoc-duoi-dat/ky-thuat-cong-trinh', function () {
            return view('page.quan-ly-cap-phep.tnn-nuoc-duoi-dat-ky-thuat-cong-trinh');
        })->name('nuoc-duoi-dat-ky-thuat-cong-trinh');

        Route::get('tao-moi-giay-phep-nuoc-mat', function () {
            return view('page.quan-ly-cap-phep.tnn-tao-moi-giay-phep-nuoc-mat');
        })->name('tao-moi-giay-phep-nuoc-mat');
        Route::get('cap-lai-giay-phep', function () {
            return view('page.quan-ly-cap-phep.tnn-cap-lai-giay-phep');
        })->name('cap-lai-giay-phep');

        Route::get('de-nghi-gia-han-dieu-chinh-giay-phep-khai-thac-su-dung-nuoc-mat', function () {
            return view('page.quan-ly-cap-phep.tnn-de-nghi-gia-han-dieu-chinh-giay-phep-khai-thac-su-dung-nuoc-mat');
        })->name('de-nghi-gia-han-dieu-chinh-giay-phep-khai-thac-su-dung-nuoc-mat');
        
        Route::get('de-nghi-cap-phep-xa-nuoc-thai-vao-nguon-nuoc', function () {
            return view('page.quan-ly-cap-phep.tnn-de-nghi-cap-phep-xa-nuoc-thai-vao-nguon-nuoc');
        })->name('de-nghi-cap-phep-xa-nuoc-thai-vao-nguon-nuoc');

        Route::get('tao-moi-giay-phep-nuoc-mat', function () {
            return view('page.quan-ly-cap-phep.tnn-tao-moi-giay-phep-nuoc-mat');
        })->name('tao-moi-giay-phep-nuoc-mat');

        Route::get('tao-moi-giay-phep-xa-thai', function () {
            return view('page.quan-ly-cap-phep.tnn-tao-moi-giay-phep-xa-thai');
        })->name('tao-moi-giay-phep-xa-thai');

        Route::post('tao-moi-giay-phep-nuoc-mat', 'App\Http\Controllers\SurfaceWaterConstructionsController@doCreateSurfacewaterLicense')->name('xu-ly-tao-moi-giay-phep-nuoc-mat');
        Route::post('tao-moi-giay-phep-xa-thai', 'App\Http\Controllers\SurfaceWaterConstructionsController@doCreateWastewaterLicense')->name('xu-ly-tao-moi-giay-phep-xa-thai');
        
        Route::get('sua-giay-phep-nuoc-mat/{id}', 'App\Http\Controllers\SurfaceWaterConstructionsController@showEditSurfacewaterLicense');
        Route::post('sua-giay-phep-nuoc-mat/{id}', 'App\Http\Controllers\SurfaceWaterConstructionsController@doEditSurfacewaterLicense')->name('xu-ly-sua-giay-phep-nuoc-mat');

        Route::get('danh-sach-giay-phep-nuoc-mat', 'App\Http\Controllers\SurfaceWaterConstructionsController@listApprovalSurfacewaterLicense')->name('danh-sach-giay-phep-nuoc-mat');
        Route::get('xet-duyet-giay-phep-nuoc-mat/{id}', 'App\Http\Controllers\SurfaceWaterConstructionsController@showApprovalSurfacewaterLicense')->name('xet-duyet-giay-phep-nuoc-mat');
    });
});

Route::post('login', [App\Http\Controllers\LoginController::class, 'authenticate']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
