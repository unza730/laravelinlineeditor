<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TaskControllers;
use App\Http\Controllers\ProductController;
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
Route::get('/register', [MainController::class, 'register'])->name('register');
Route::get('/login', [MainController::class, 'login'])->name('login');
Route::post('/save', [MainController::class, 'save'])->name('save');
Route::post('/check', [MainController::class, 'check'])->name('check');

// Route::get('/task',[TaskController::class,'index'])->name('task.index');
// Route::post('/task',[TaskController::class,'create']);
Route::get('/task',[TaskControllers::class,'index'])->name('task.index');
Route::post('/task',[TaskControllers::class,'create']);
Route::get('/edit/{id}',[TaskControllers::class,'edit'])->name('edit');
Route::put('/edit/{id}',[TaskControllers::class,'update'])->name('update');
Route::get('/delete/{id}',[TaskControllers::class,'delete'])->name('delete');





// Inline Editor
// Route::get('product', [ProductController::class, 'index'])->name('product.index');
// Route::post('product', [ProductController::class, 'update'])->name('product');
// Route::post('product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
// Route::get('product', [ProductController::class, 'index'])->name('product.index');
// Route::post('product', [ProductController::class, 'update'])->name('product.update');