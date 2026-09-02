<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $electronics = Category::where('name', 'Electronics')->first();
        $fashion = Category::where('name', 'Fashion')->first();
        $home = Category::where('name', 'Home & Kitchen')->first();
        $sports = Category::where('name', 'Sports')->first();

        $products = [
            [
                'name' => 'Wireless Over-Ear Headphones',
                'description' => 'Noise-cancelling wireless headphones with 30-hour battery life.',
                'imagePath' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=600&q=80',
                'quantity' => 45,
                'price' => 89.99,
                'category_id' => $electronics->id,
            ],
            [
                'name' => 'Smartwatch Series 5',
                'description' => 'Fitness tracking smartwatch with heart-rate monitor and GPS.',
                'imagePath' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=600&q=80',
                'quantity' => 30,
                'price' => 199.99,
                'category_id' => $electronics->id,
            ],
            [
                'name' => 'Portable Bluetooth Speaker',
                'description' => 'Compact waterproof speaker with rich bass and 12-hour playtime.',
                'imagePath' => 'https://images.unsplash.com/photo-1608043152269-423dbba4e7e1?auto=format&fit=crop&w=600&q=80',
                'quantity' => 60,
                'price' => 49.99,
                'category_id' => $electronics->id,
            ],
            [
                'name' => '4K Ultra HD Laptop',
                'description' => 'Slim, powerful laptop with a stunning 4K display and fast SSD.',
                'imagePath' => 'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?auto=format&fit=crop&w=600&q=80',
                'quantity' => 15,
                'price' => 1099.00,
                'category_id' => $electronics->id,
            ],
            [
                'name' => "Men's Leather Sneakers",
                'description' => 'Handcrafted genuine leather sneakers for everyday comfort.',
                'imagePath' => 'https://images.unsplash.com/photo-1549298916-b41d501d3772?auto=format&fit=crop&w=600&q=80',
                'quantity' => 70,
                'price' => 74.50,
                'category_id' => $fashion->id,
            ],
            [
                'name' => "Women's Denim Jacket",
                'description' => 'Classic fitted denim jacket, versatile for any season.',
                'imagePath' => 'https://images.unsplash.com/photo-1551028719-00167b16eac5?auto=format&fit=crop&w=600&q=80',
                'quantity' => 40,
                'price' => 59.99,
                'category_id' => $fashion->id,
            ],
            [
                'name' => 'Classic Aviator Sunglasses',
                'description' => 'UV-protected aviator sunglasses with a durable metal frame.',
                'imagePath' => 'https://images.unsplash.com/photo-1572635196237-14b3f281503f?auto=format&fit=crop&w=600&q=80',
                'quantity' => 90,
                'price' => 24.99,
                'category_id' => $fashion->id,
            ],
            [
                'name' => 'Stainless Steel Cookware Set',
                'description' => '10-piece stainless steel pots and pans set for the modern kitchen.',
                'imagePath' => 'https://images.unsplash.com/photo-1590794056226-79ef3a8147e1?auto=format&fit=crop&w=600&q=80',
                'quantity' => 20,
                'price' => 149.99,
                'category_id' => $home->id,
            ],
            [
                'name' => 'Modern Accent Armchair',
                'description' => 'Comfortable upholstered accent chair for living rooms.',
                'imagePath' => 'https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?auto=format&fit=crop&w=600&q=80',
                'quantity' => 12,
                'price' => 229.00,
                'category_id' => $home->id,
            ],
            [
                'name' => 'Automatic Drip Coffee Maker',
                'description' => 'Programmable coffee maker with a 12-cup glass carafe.',
                'imagePath' => 'https://images.unsplash.com/photo-1517142089942-ba376ce32a2e?auto=format&fit=crop&w=600&q=80',
                'quantity' => 35,
                'price' => 64.99,
                'category_id' => $home->id,
            ],
            [
                'name' => 'Yoga Mat with Carry Strap',
                'description' => 'Non-slip, eco-friendly yoga mat, 6mm thick with carry strap.',
                'imagePath' => 'https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?auto=format&fit=crop&w=600&q=80',
                'quantity' => 80,
                'price' => 29.99,
                'category_id' => $sports->id,
            ],
            [
                'name' => 'Adjustable Dumbbell Set',
                'description' => 'Space-saving adjustable dumbbells for home strength training.',
                'imagePath' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?auto=format&fit=crop&w=600&q=80',
                'quantity' => 25,
                'price' => 129.99,
                'category_id' => $sports->id,
            ],
        ];

        foreach ($products as $product) {
            Product::firstOrCreate(
                ['name' => $product['name']],
                $product
            );
        }
    }
}
