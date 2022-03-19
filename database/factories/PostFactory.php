<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
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
            'free' => rand(0, 1),
            'image' => $this->faker->imageUrl(1280, 720),
            'description' => $this->faker->text(800),

            'course_id' => rand(1, 10),
        ];
    }
}
