<?php

namespace Database\Seeders;

use App\Models\Orders;
use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
    public function run()
    {
        Orders::create([
            'product_id' => 1, // Pastikan produk dengan ID ini ada di tabel products
            'quantity' => 10,
            'total_price' => 50000,
            'order_date' => now(),
        ]);

        Orders::create([
            'product_id' => 2,
            'quantity' => 5,
            'total_price' => 30000,
            'order_date' => now(),
        ]);
    }
}
