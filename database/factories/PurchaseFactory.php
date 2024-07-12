<?php

namespace Database\Factories;

use App\Models\Purchase;
use App\Models\Supplier;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class PurchaseFactory extends Factory
{
    protected $model = Purchase::class;

    public function definition()
    {
        static $purchaseNumber = 10000;

        return [
            'supplier_id' => Supplier::factory(),
            'category_id' => Category::factory(),
            'product_id' => Product::factory(),
            'purchase_no' => 'PUR-' . $purchaseNumber++,
            'date' => $this->faker->dateTimeBetween('-3 years', 'now'),
            'description' => $this->faker->sentence(),
            'buying_qty' => $this->faker->numberBetween(1, 100),
            'unit_price' => $this->faker->randomFloat(2, 10, 1000),
            'buying_price' => $this->faker->randomFloat(2, 100, 10000),
            'status' => $this->faker->randomElement([0, 1]),
            'created_by' => $this->faker->numberBetween(1, 50),
            'updated_by' => $this->faker->numberBetween(1, 50),
        ];
    }
}