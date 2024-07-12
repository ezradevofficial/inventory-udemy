<?php

namespace Database\Seeders;

use App\Models\Payment;
use App\Models\PaymentDetail;
use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{
    public function run()
    {
        Payment::factory()->count(500)->create()->each(function ($payment) {
            PaymentDetail::factory()->create([
                'invoice_id' => $payment->invoice_id,
                'date' => $payment->created_at,
            ]);
        });
    }
}
