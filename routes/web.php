<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HaloController;

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

// Route::get('/helo', function(){
//     return view('halo');
// });

// Route::get('/halo', function(){
//     return view('halo2');
// });

Route::get('/profil/', function(){
    return view('profil');
})->name('profil');

Route::get('/halo/index/{param1}/{param2?}', 
    [HaloController::class, 'index']);

    Route::post('/halo/index/', 
    [HaloController::class, 'index']);
