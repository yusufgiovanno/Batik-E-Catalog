<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProdukController;


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

Route::post('/pesan',          [PesanController::class,  'store']);
Route::get ('/',               [ProdukController::class, 'index']);
Route::get ('/produk',         [ProdukController::class, 'create']);
Route::get ('/produk-publish', [ProdukController::class, 'publish']);
Route::get ('/produk-archive', [ProdukController::class, 'archive']);
