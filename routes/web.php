<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;

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

Route::get('/',[HomeController::class, 'index']);
Route::get('/product/{id}',[HomeController::class, 'detail']);

Route::get('/about', function () {
    return view('about');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/detail', function () {
    return view('detail');
});


// Dashboard Product
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('index');
Route::get('/dashboard/tambah',[DashboardController::class, 'tambah'])->middleware(['auth'])->name('tambah');;
Route::post('/dashboard/store',[DashboardController::class, 'store']);
Route::get('/dashboard/edit/{id}',[DashboardController::class, 'edit']);
Route::post('/dashboard/update',[DashboardController::class, 'update']);
Route::get('/dashboard/hapus/{id}',[DashboardController::class, 'hapus']);

// Dashboard Category
Route::get('/dashboard/category', [DashboardController::class, 'indexcat'])->middleware(['auth'])->name('index');
Route::get('/dashboard/category/tambah',[DashboardController::class, 'tambahcat'])->middleware(['auth'])->name('tambah');;
Route::post('/dashboard/category/store',[DashboardController::class, 'storecat']);
Route::get('/dashboard/category/edit/{id}',[DashboardController::class, 'editcat']);
Route::post('/dashboard/category/update',[DashboardController::class, 'updatecat']);
Route::get('/dashboard/category/hapus/{id}',[DashboardController::class, 'hapuscat']);


require __DIR__.'/auth.php';


