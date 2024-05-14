<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sku' => 'SKU' . str_pad($this->faker->unique()->numberBetween(1, 100), 3, '0', STR_PAD_LEFT),
            'product_category' => mt_rand(1, 4),
            'product_name' => $this->faker->sentence(2),
            'product_detail' => $this->faker->paragraph(),
            'product_brand' => mt_rand(1, 6),
            'product_price' => mt_rand(50, 500),
            'fileimages' => 'image' . mt_rand(1, 10) . '.jpg',
            'status' => 'Active',
            'deleted' => 'false',
            'created_at' => now(),
            'updated_at' => now(),
            'slug' => $this->faker->unique()->word()
        ];
    }
}
