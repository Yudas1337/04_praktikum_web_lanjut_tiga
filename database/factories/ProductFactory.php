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
        $name = $this->faker->sentence;
        return [
            'name'      => $name,
            'image'     => $this->faker->imageUrl(640, 480, null, true),
            'content'   => $this->faker->realText(),
            'price'     => $this->faker->randomNumber(5),
            'slug'      => str_slug($name),
        ];
    }
}
