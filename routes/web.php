<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SettingController;


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

Route::get ('/',               [ProdukController::class, 'index'  ]);
Route::post('/pesan',          [PesanController::class,  'store'  ]);

Route::get ('/produk',         [ProdukController::class, 'create' ]);
Route::get ('/produk-publish', [ProdukController::class, 'publish']);
Route::get ('/produk-archive', [ProdukController::class, 'archive']);
Route::post('/produk-update',  [ProdukController::class, 'update' ]);
Route::post('/produk-store',   [ProdukController::class, 'store'  ]);

Route::get ('/settings',       [SettingController::class, 'index' ]);
Route::post('/settings',       [SettingController::class, 'update' ]);
