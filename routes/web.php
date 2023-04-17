<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\WebController;
use App\Models\Siswa;

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

Route::get('/', [FrontController::class, 'index']);
Route::get('/cetak/{id}', [FrontController::class, 'cetak']);


Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'otentikasi']);

Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');


Route::group(['middleware' => ['auth']], function () {

    Route::get('/dashboard', [AdminController::class, 'index']);

    Route::prefix('/siswa')->group(function () {
        Route::get('/', [SiswaController::class, 'index'])->name('siswa');
        Route::get('/upload', [SiswaController::class, 'upload']);
        Route::post('/import_excel', [SiswaController::class, 'import_excel']);
        Route::get('/tambah', [SiswaController::class, 'create']);
        Route::post('/', [SiswaController::class, 'store']);
    });


    Route::prefix('/setting')->group(function () {
        Route::get('/', [SettingController::class, 'index'])->name('setting');
        Route::get('/edit', [SettingController::class, 'show']);
        Route::post('/store', [SettingController::class, 'store']);
    });

    Route::prefix('/skl')->group(function () {
        Route::get('/', [SchoolController::class, 'index'])->name('skl');
        Route::get('/edit', [SchoolController::class, 'edit']);
        Route::post('/update/{id}', [SchoolController::class, 'update']);
    });

    Route::prefix('/web')->group(function () {
        Route::get('/', [WebController::class, 'index'])->name('web');
        Route::get('/edit', [WebController::class, 'edit']);
        Route::post('/update/{id}', [WebController::class, 'update']);
    });
});
