<?php

namespace Database\Factories;

use App\Models\InvoiceDetail;
use App\Models\Invoice;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceDetailFactory extends Factory
{
    protected $model = InvoiceDetail::class;

    public function definition()
    {
        return [
            'date' => $this->faker->dateTimeBetween('-10 years', 'now'),
            'invoice_id' => Invoice::factory(),
            'category_id' => Category::factory(),
            'product_id' => Product::factory(),
            'selling_qty' => $this->faker->numberBetween(1, 50),
            'unit_price' => $this->faker->randomFloat(2, 10, 1000),
            'selling_price' => $this->faker->randomFloat(2, 100, 10000),
            'status' => $this->faker->randomElement([0, 1]),
        ];
    }
}