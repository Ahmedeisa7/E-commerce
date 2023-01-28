<?php

use Illuminate\Routing\Events\Routing;
use Illuminate\Support\Facades\Route;

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
    // return view('dashboard.categories.edit');
})->name('index');

Auth::routes();

Route::get('/',[\App\Http\Controllers\Site\HomeController::class,'index'])->name('index');
Route::get('product/{id}',[\App\Http\Controllers\Site\ProductController::class,'show'])->name('product.show');
