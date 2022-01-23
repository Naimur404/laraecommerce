<?php

namespace Database\Factories;

use App\Models\Category;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Category::class;
    public function definition()
    {
        $catagory_title = $this->faker->unique()->words($nb=4,$asText=true);
        $slug = Str::slug($catagory_title);
        return [
            'title'=> $catagory_title,
            'slug'=> $slug
        ];
    }
}
