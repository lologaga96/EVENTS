<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gestion_event;

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

Route::get('/',[gestion_event::class,"home"])->name("home");
Route::get('/event',[gestion_event::class,"vue"])->name("vue");
Route::post('/',[gestion_event::class,"save"]);
