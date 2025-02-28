<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Professional Website Design',
                'description' => 'Custom-designed professional website tailored to your brand identity.',
                'price' => 999.99,
                'image' => 'assets/images/work-image-1.jpg'
            ],
            [
                'name' => 'E-commerce Solution',
                'description' => 'Complete e-commerce website with payment integration and inventory management.',
                'price' => 1499.99,
                'image' => 'assets/images/work-image-2.jpg'
            ],
            [
                'name' => 'SEO Package',
                'description' => 'Comprehensive SEO optimization to improve your website\'s visibility.',
                'price' => 499.99,
                'image' => 'assets/images/work-image-3.jpg'
            ],
            [
                'name' => 'Mobile App Development',
                'description' => 'Native mobile application development for iOS and Android platforms.',
                'price' => 2499.99,
                'image' => 'assets/images/work-image-4.jpg'
            ],
            [
                'name' => 'Digital Marketing Campaign',
                'description' => 'Full-service digital marketing campaign including social media and PPC.',
                'price' => 799.99,
                'image' => 'assets/images/work-image-5.jpg'
            ],
            [
                'name' => 'Brand Identity Package',
                'description' => 'Complete brand identity design including logo, business cards, and style guide.',
                'price' => 699.99,
                'image' => 'assets/images/work-image-6.jpg'
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
