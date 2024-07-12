<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    protected $categories = [
        'Hand Tools',
        'Power Tools',
        'Electrical Supplies',
        'Plumbing',
        'Building Materials',
        'Paints & Finishes',
        'Fasteners & Hardware',
        'Lighting',
        'Garden & Outdoor',
        'Safety Equipment'
        // Add any other categories you have defined products for
    ];

    public function definition()
    {
        return [
            'name' => $this->faker->unique()->randomElement($this->categories),
            'status' => $this->faker->randomElement([0, 1]),
            'created_by' => $this->faker->numberBetween(1, 5),
            'updated_by' => $this->faker->numberBetween(1, 5),
            'created_at' => $this->faker->dateTimeBetween('-3 years', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-3 years', 'now'),
        ];
    }
}