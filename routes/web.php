<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HaloController;
use App\Models\pelanggan;
use App\Models\pembelian;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo/index/{param1}/{param2}/{param3?}', [HaloController::class, 'index'])->name('halo.index');

Route::get('/pelanggan', function(){
    return view('pelanggan', ['pelanggan'=>Pelanggan::with(['pembelian'])->get(), 'pembelian'=>Pembelian::with(['pelanggan'])->get()]);
});

Route::get('/pembelian', function(){
    return view('pelanggan', ['pelanggan'=>Pelanggan::with(['pembelian'])->get()]);
});

// Route::get('/helo', function(){
//     return 'Hello World!';
// });

// Route::get('/heloo', function(){return view('profil');});

// Route::get('/eric/{var1?}', function(){
//     return view('blade');
// })->name('erico');