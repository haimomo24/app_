<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\SiteController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ProductController;

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
Route::get('/',[SiteController::class,'index'])->name('site.home');
//khai bao route trang quan ly 
Route::prefix('admin')->group(function ()
{
   Route::get('/',[DashboardController::class,'index'])->name('admin.dashboard');
   Route::resource('brand',BrandController::class);
   Route::resource('category',CategoryController::class);
   Route::prefix('category')->group(function (){
         Route::get('status/{category}',[CategoryController::class,'status'])->name('category.status');
         Route::get('delete/{category}',[CategoryController::class,'delete'])->name('category.delete');
   });
   Route::resource('product',ProductController::class);
});
