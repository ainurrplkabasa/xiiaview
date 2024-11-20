<?php

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use Faker\Guesser\Name;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pelanggans',[PelangganController::class,'index'])
->name('pelanggans.index');

Route::get('/pelanggans/create',[PelangganController::class,'create'])
->name('pelanggans.create');

Route::post('/pelanggans',[PelangganController::class,'store'])
->name('pelanggans.store');


