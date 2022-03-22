<?php

use Illuminate\Support\Facades\Route;
//use App\Models\baru;
use App\Http\Controllers\controlbaru;
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

Route::get('/',[controlbaru::class,'index']);
Route::get('/about',[controlbaru::class,'about']);
Route::get('/biodata',[controlbaru::class,'biodata']);
Route::get('/contact',[controlbaru::class,'contact']);