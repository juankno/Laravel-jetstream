<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $sentence =  $this->faker->sentence;
        return [
            'name' => $sentence,
            'slug' => Str::slug($sentence),
            'image' => $this->faker->imageUrl(1280, 720),
            'description' => $this->faker->text(800),

            'user_id' => rand(1, 5),
            'category_id' => rand(1, 3),
        ];
    }
}
