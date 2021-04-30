<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

    Route::get('/', [HomeController::class, 'index']);
    Route::get('/inputPembayaran', [HomeController::class, 'inputPembayaran']);
    Route::get('/inputNilaiUlangan', [HomeController::class, 'inputNilaiUlangan']);
    Route::get('/inputNilaiRaport', [HomeController::class, 'inputNilaiRaport']);
    Route::get('/inputPelanggaran', [HomeController::class, 'inputPelanggaran']);

    Route::get('/tampilRaport', [HomeController::class, 'tampilRaport']);
    Route::get('/tampilNilaiUlangan', [HomeController::class, 'tampilNilaiUlangan']);

    Route::get('/tampilRaport', [HomeController::class, 'tampilRaport']);