<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

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
            'image'     => $this->faker->imageUrl(640, 480, "nature", true),
            'content'   => $this->faker->realText(),
            'slug'      => str_slug($name),
        ];
    }
}
