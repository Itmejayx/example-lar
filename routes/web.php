<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('Frontend.home');
// });

// Frontend
Route::get('/',[HomeController::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Backend
Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/logout', [App\Http\Controllers\Admin\DashboardController::class, 'logout'])->name('logout');

Route::get('admin/category',[CategoryController::class,'index']);

Route::get('admin/category/add',[CategoryController::class,'create']);

Route::post('admin/category/add',[CategoryController::class,'store']);

Route::get('admin/category/edit/{id}',[CategoryController::class,'edit']);

Route::post('admin/category/edit/{id}',[CategoryController::class,'update']);

Route::get('admin/category/delete/{id}',[CategoryController::class,'destroy']);

Route::get('unactive/category/{id}',[CategoryController::class,'unactive']);

Route::get('active/category/{id}',[CategoryController::class,'active']);




