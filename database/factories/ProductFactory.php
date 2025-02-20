<?php

namespace Database\Factories;

use App\Models\CategoryGroup;
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
            'name' => $this->faker->name(),
            'category_id' => CategoryGroup::query()->inRandomOrder()->value('id') ?? 1,
            'slug' => $this->faker->unique()->slug(),
            'tags' => $this->faker->word(),
            'img' => 'upload/images/BR87JpoNyXuYV4iQDs99ghKqRG15NjeJvejMg8M4.jpg',
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
            'description'=> $this->faker->text(),
            'additional_information' => $this->faker->text(),
            'ratings' => $this->faker->randomFloat(1,1,5),
        ];
    }
}
