<?php

namespace Database\Seeders;

use App\Models\Unit;
use Database\Factories\UnitFactory;
use Illuminate\Database\Seeder;

class UnitsTableSeeder extends Seeder
{
    public function run()
    {
        Unit::factory()->count(count((new UnitFactory())->units))->create();
    }
}