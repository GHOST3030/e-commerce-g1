<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $categories=DB::table('categories')->get();
    return view('welcome',compact('categories'));
});


Route::get('/product/{catId?}', function ($catId=null) {
    if($catId){
      $products=DB::table('products')->where('category_id',$catId)->get();
    }else{
         $products=DB::table('products')->get();
    }
     return view('product',compact('products'));
});

Route::get('/category', function () {
    return view('category');
});

