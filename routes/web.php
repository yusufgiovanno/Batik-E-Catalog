<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingController;

Route::view ('/laravel', 'welcome');

Route::get ('/',                     [ProdukController::class, 'index'  ]);
Route::post('/pesan',                [PesanController::class,  'store'  ]);
Route::get ('/inbox',                [PesanController::class,  'index'  ]);

Route::get ('/produk',               [ProdukController::class, 'create' ]);
Route::get ('/filter',               [ProdukController::class, 'filter' ]);
Route::get ('/produk-publish',       [ProdukController::class, 'publish']);
Route::get ('/produk-archive',       [ProdukController::class, 'archive']);
Route::post('/produk-update',        [ProdukController::class, 'update' ]);
Route::post('/produk-store',         [ProdukController::class, 'store'  ]);

Route::post('/kategori-store',       [ProdukController::class, 'storeKat' ]);
Route::post('/kategori-update',      [ProdukController::class, 'updateKat']);
Route::get ('/kategori-delete/{id}', [ProdukController::class, 'deleteKat']);

Route::get ('/settings',             [SettingController::class, 'index'    ]);
Route::post('/settings',             [SettingController::class, 'update'   ]);
Route::get ('/dashboard',            [SettingController::class, 'dashboard']);

Route::post('/login',                [UserController::class, 'login' ]);
Route::get ('/logout',               [UserController::class, 'logout']);
Route::post('/password',             [UserController::class, 'passwd']);

Route::get('generate', function (){
    \Illuminate\Support\Facades\Artisan::call('storage:link');
    echo 'ok';
});