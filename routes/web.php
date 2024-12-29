<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // check user
    if(Auth::user() == ''){
        return redirect('login');
    }else{
        return view('welcome');
    }
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/category', [CategoryController::class, 'index'])->name('admin.category');
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
});