<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($catId = null)
    {
        $products = $catId
            ? Product::where('category_id', $catId)->get()
            : Product::all();

        return view('product', compact('products'));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'sometimes|string|max:255',
            'description' => 'sometimes|nullable|string',
            'imagePath' => 'sometimes|nullable|string',
            'quantity' => 'sometimes|integer|min:0',
            'price' => 'sometimes|numeric|min:0',
            'category_id' => 'sometimes|exists:categories,id',
        ]);

        $product->update($validated);

        return redirect()->route('product.index')->with('status', 'Product updated.');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('product.index')->with('status', 'Product deleted.');
    }
}
