<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index($catId = null)
    {
        $products = $catId
            ? Product::where('category_id', $catId)->get()
            : Product::all();

        return view('product', compact('products'));
    }
}
