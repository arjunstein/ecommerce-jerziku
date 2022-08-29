<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'price' => $this->faker->numberBetween(100000, 1000000),
            'desc' => $this->faker->paragraph(),
            'image' => $this->faker->mimeType(public_path('/storage')),
        ];
        // return [
        // 'name' => $this->faker->name(),
        // 'price' => $this->faker->numberBetween(100000, 1000000),
        // 'desc' => $this->faker->paragraph(),
        // // 'image' => $this->faker->image('public/storage/products'),
        // 'image' => $this->faker->image(public_path('/storage'), 650, 490, null, false),
        // ];
    }
}
