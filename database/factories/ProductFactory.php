<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     
     */
    protected $model = Product::class;
    public function definition()
    {
        $product_title = $this->faker->unique()->words($nb=4,$asText=true);
        $slug = Str::slug($product_title);
        return [
            "title"=>$product_title,
            'slug'=> $slug,
            'description'=> $this->faker->text(500),
            'regular_price'=>$this->faker->numberBetween(100,500),
            'image'=> 'digital_'.$this->faker->unique()->numberBetween(1,20).'jpg',
            'category_id'=>$this->faker->numberBetween(1,2)
            //
        ];
    }
}
