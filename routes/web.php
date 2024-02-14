<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\TransaksiDetailController;
use App\Models\Produk;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/template', function () {
    return view('template');
});*/

Route::get('/', function () {
   
    $data = [
        'content' => 'admin.dashboard.index'
    ];
   
    return view('admin.layouts.wrapper', $data);
});

Route::prefix('/admin')->group(function (){
    
    Route::resource('/user', UserController::class);
    Route::resource('/kategori', KategoriController::class);
    Route::resource('/produk',  ProdukController::class);
    Route::resource('/transaksi',  TransaksiController::class);
    Route::post('/transaksi/detail/create', [TransaksiDetailController::class, 'create']);
    Route::get('/transaksi/detail/delete', [TransaksiDetailController::class, 'delete']);
    Route::get('/transaksi/detail/selesai/{id}', [TransaksiDetailController::class, 'done']);
    
});







