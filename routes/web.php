<?php

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/items',[\App\Http\Controllers\ItemController::class,'index'])->name('items.index');
Route::any('/items/create',[\App\Http\Controllers\ItemController::class,'create'])->name('items.create');
Route::post('/items/store',[\App\Http\Controllers\ItemController::class,'store'])->name('items.store');
Route::any('/items/edit/{id}',[\App\Http\Controllers\ItemController::class,'edit'])->name('items.edit');
Route::post('/items/update',[\App\Http\Controllers\ItemController::class,'update'])->name('items.update');
Route::any('/items/delete/{id}',[\App\Http\Controllers\ItemController::class,'destroy'])->name('items.delete');

Route::any('/blogs',[\App\HTTP\Controllers\BlogController::class,'index'])->name('blogs.index');
Route::any('/blogs/delete/{id}',[\App\Http\Controllers\BlogController::class,'destroy'])->name('blogs.delete');
Route::any('/blogs/create',[\App\Http\Controllers\BlogController::class,'create'])->name('blogs.create');
Route::any('/blogs/store',[\App\Http\Controllers\BlogController::class,'store'])->name('blogs.store');
Route::any('/blogs/edit/{id}',[\App\Http\Controllers\BlogController::class,'edit'])->name('blogs.edit');
Route::any('/blogs/update',[\App\Http\Controllers\BlogController::class,'update'])->name('blogs.update');




require __DIR__.'/auth.php';

