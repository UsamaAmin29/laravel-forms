<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers as usama;
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

// Route::get('/', function () {
//     return view('frontend.list-product');
// });

// Route::get('/product', function () {
//     return view('frontend.add-product');
// });
// Route::get('/edit-product', function () {
//     return view('frontend.edit-product');
// });

Route::get('/',[usama\productController::class,'index']);
Route::get('/add',[usama\productController::class,'add']);
Route::post('/priduct-list',[usama\productController::class,'insert'])->name('insert.product');
