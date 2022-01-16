<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TaskController;
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

Route::get('/task',[TaskController::class,'index'])->name('index');
Route::post('/task',[TaskController::class,'create']);

Route::post('/task', [TaskController::class, 'update'])->name('task.task');


// Inline Editor
Route::get('product', [ProductController::class, 'index'])->name('product.index');
Route::post('product', [ProductController::class, 'update'])->name('product');