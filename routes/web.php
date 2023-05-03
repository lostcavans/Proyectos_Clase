<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
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
    return view('welcome');
});

Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::get('/category/create', [CategoryController::class, 'create'])->name('createCategory');
Route::post('/category/store',[CategoryController::class, 'store'])->name('saveCategory');
Route::get('/category/{id}', [CategoryController::class, 'edit'])->name('editCategory');
Route::get('/category/show/{id}', [CategoryController::class, 'show'])->name('showCategory');
Route::post('/category/update', [CategoryController::class, 'update'])->name('updateCategory');