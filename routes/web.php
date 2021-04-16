<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
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
Route::get('/home', function () {
    return view('master');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/product/form', [ ProductController::class,'showForm'])->name('product.form');
Route::get('/brand/list', [ BrandController::class,'showList'])->name('brand.list');
Route::get('/brand/form', [ BrandController::class,'showForm'])->name('brand.form');



