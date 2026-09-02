<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $categories=DB::table('categories')->get();
    return view('welcome',compact('categories'));
});


Route::get('/product/{catId?}', [ProductController::class, 'index'])->name('product.index');
Route::put('/product/{product}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{product}', [ProductController::class, 'destroy'])->name('product.destroy');

Route::get('/category', function () {
    return view('category');
});

