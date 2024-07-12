<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
                // UsersTableSeeder::class,
                // SuppliersTableSeeder::class,
                // CustomersTableSeeder::class,
                // CategoriesTableSeeder::class,
            UnitsTableSeeder::class,
            // ProductsTableSeeder::class,
            // PurchasesTableSeeder::class,
            // InvoicesTableSeeder::class,
            // PaymentsTableSeeder::class,
        ]);
    }
}
