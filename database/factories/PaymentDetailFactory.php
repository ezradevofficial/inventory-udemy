<?php

namespace Database\Factories;

use App\Models\PaymentDetail;
use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentDetailFactory extends Factory
{
    protected $model = PaymentDetail::class;

    public function definition()
    {
        return [
            'invoice_id' => Invoice::factory(),
            'current_paid_amount' => $this->faker->randomFloat(2, 10, 1000),
            'date' => $this->faker->dateTimeBetween('-10 years', 'now'),
            'updated_by' => $this->faker->numberBetween(1, 50),
        ];
    }
}