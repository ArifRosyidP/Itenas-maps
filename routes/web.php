<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsetController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\SumAsetController;
use App\Http\Controllers\JaringanController;
use App\Http\Controllers\konservercontroller;
use App\Http\Controllers\DetailAsetController;
use App\Http\Controllers\listservercontroller;

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



Route::get('/', [JaringanController::class, 'index']);

Route::get('/aset', [SumAsetController::class, 'index']);

Route::get('/aset', [AsetController::class, 'index']);

Route::get('/jtable', [DetailController::class, 'index']);

Route::get('/kondisi-server', [konservercontroller::class, 'index']);

Route::get('/list-server', [listservercontroller::class, 'index']);

// Route::get('/getdataaset/{tipe}/{gedung}', [DetailController::class, 'getdataaset']);
Route::get('/detailaset/{nama}/{gedung}', [DetailAsetController::class, 'getdataaset']);

Route::get('/about', function () {
    return view('welcome', [
        "title" => "About"
    ]);
});