<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Counter;
use App\Models\Customer;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Counter::factory()->count(1)->create();
        Product::factory()->count(5)->create();
        Customer::factory()->count(5)->create();
        Invoice::factory()->count(5)->create();
        InvoiceItem::factory()->count(5)->create();
    }
}
