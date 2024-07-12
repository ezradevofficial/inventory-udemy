<?php

namespace Database\Factories;

use App\Models\Payment;
use App\Models\Invoice;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    protected $model = Payment::class;

    public function definition()
    {
        $total_amount = $this->faker->randomFloat(2, 100, 10000);
        $paid_amount = $this->faker->randomFloat(2, 0, $total_amount);
        $due_amount = $total_amount - $paid_amount;

        return [
            'invoice_id' => Invoice::factory(),
            'customer_id' => Customer::factory(),
            'paid_status' => $this->faker->randomElement(['full_paid', 'partial_paid', 'full_due']),
            'paid_amount' => $paid_amount,
            'due_amount' => $due_amount,
            'total_amount' => $total_amount,
            'discount_amount' => $this->faker->randomFloat(2, 0, 100),
        ];
    }
}