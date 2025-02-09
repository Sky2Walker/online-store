<?php

namespace Database\Factories;

use App\Models\Color;
use App\Models\Material;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductVariant>
 */
class ProductVariantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => Product::query()->inRandomOrder()->value('id') ?? 1,
            'color_id' => Color::query()->inRandomOrder()->value('id') ?? 1,
            'size_id' => Size::query()->inRandomOrder()->value('id') ?? 1,
            'material_id' => Material::query()->inRandomOrder()->value('id') ?? 1,
            'quantity' => $this->faker->numberBetween(1, 10),
            'price' => $this->faker->numberBetween(10, 10000),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
            'sku' => 'SKU-' . Str::uuid(),
        ];
    }
}
