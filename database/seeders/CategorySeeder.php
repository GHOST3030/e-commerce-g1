<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Electronics',
                'description' => 'Phones, laptops, audio gear and other everyday electronics.',
                'imagePath' => 'https://images.unsplash.com/photo-1498049794561-7780e7231661?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'name' => 'Fashion',
                'description' => 'Clothing, footwear and accessories for everyday wear.',
                'imagePath' => 'https://images.unsplash.com/photo-1445205170230-053b83016050?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'name' => 'Home & Kitchen',
                'description' => 'Furniture, appliances and essentials for the home.',
                'imagePath' => 'https://images.unsplash.com/photo-1556909212-d5b604d0c90d?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'name' => 'Sports',
                'description' => 'Gear and equipment for fitness and outdoor activities.',
                'imagePath' => 'https://images.unsplash.com/photo-1517649763962-0c623066013b?auto=format&fit=crop&w=600&q=80',
            ],
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate(
                ['name' => $category['name']],
                $category
            );
        }
    }
}
