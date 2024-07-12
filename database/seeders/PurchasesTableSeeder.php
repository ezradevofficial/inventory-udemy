<?php

namespace Database\Seeders;

use App\Models\Purchase;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PurchasesTableSeeder extends Seeder
{
    public function run()
    {
        $startDate = Carbon::now()->subYears(3);
        $endDate = Carbon::now();

        Purchase::factory()->count(1000)->create()->each(function ($purchase) use ($startDate, $endDate) {
            $purchase->date = Carbon::createFromTimestamp(rand($startDate->timestamp, $endDate->timestamp));
            $purchase->save();
        });
    }
}
