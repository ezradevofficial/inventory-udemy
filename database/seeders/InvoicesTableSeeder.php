<?php

namespace Database\Seeders;

use App\Models\Invoice;
use App\Models\InvoiceDetail;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class InvoicesTableSeeder extends Seeder
{
    public function run()
    {
        $startDate = Carbon::now()->subYears(3);
        $endDate = Carbon::now();

        Invoice::factory()->count(500)->create()->each(function ($invoice) use ($startDate, $endDate) {
            $invoice->date = Carbon::createFromTimestamp(rand($startDate->timestamp, $endDate->timestamp));
            $invoice->save();

            // Create 1-5 invoice details for each invoice
            InvoiceDetail::factory()->count(rand(1, 5))->create([
                'invoice_id' => $invoice->id,
                'date' => $invoice->date,
            ]);
        });
    }
}
