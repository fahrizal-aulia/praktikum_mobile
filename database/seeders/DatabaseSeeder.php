<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Brand;
use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Product::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'fahrizal',
            'email' => 'fahrizal@gmail.com',
        ]);
        Brand::factory()->create([
            'product_brand' => 'eiger',
            'status' => 'active',
            'deleted' => 'false',
        ]);
        Brand::factory()->create([
            'product_brand' => 'consina',
            'status' => 'active',
            'deleted' => 'false',
        ]);
        Brand::factory()->create([
            'product_brand' => 'rei',
            'status' => 'active',
            'deleted' => 'false',
        ]);

    ProductCategory::create([
        'product_category_name' => 'kategori 1',
        'status' => 'active',
        'deleted' => 'false',
    ]);
    ProductCategory::create([
        'product_category_name' => 'Kategori 2',
        'status' => 'active',
        'deleted' => 'false',
    ]);
    ProductCategory::create([
        'product_category_name' => 'Kategori 3',
        'status' => 'active',
        'deleted' => 'false',
    ]);
    ProductCategory::create([
        'product_category_name' => 'Kategori 4',
        'status' => 'active',
        'deleted' => 'false',
    ]);
    }
}
