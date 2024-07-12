<?php

namespace Database\Factories;

use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
    protected $model = Invoice::class;

    public function definition()
    {
        return [
            'invoice_no' => $this->faker->unique()->numberBetween(10000, 99999),
            'date' => $this->faker->dateTimeBetween('-3 years', 'now'),
            'description' => $this->faker->sentence(),
            'status' => $this->faker->randomElement([0, 1]),
            'created_by' => $this->faker->numberBetween(1, 50),
            'updated_by' => $this->faker->numberBetween(1, 50),
        ];
    }
}