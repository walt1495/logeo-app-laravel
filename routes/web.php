<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/',[LoginController::class,'index'])->name('home');

Route::post('/registrar',[LoginController::class,'registrar'])->name('registrar');
Route::post('/logeo',[LoginController::class,'logeo'])->name('logeo');
