<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->company(),
            'description' => $this->faker->text($maxnbchars = 100),
            'image' => $this->faker->imageUrl(),
            'category' => $this->faker->colorName(),
            'klikcoinsProducts' => $this->faker->randomNumber($nbdigits=2),
        ];
    }
}
