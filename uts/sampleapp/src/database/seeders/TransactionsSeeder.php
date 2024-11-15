<?php

namespace Database\Seeders;

use App\Models\Transactions;
use Illuminate\Database\Seeder;

class TransactionsSeeder extends Seeder
{
    public function run()
    {
        Transactions::create([
            'order_id' => 1,  // Order Nugget Sayur
            'payment_method' => 'cash',
            'transaction_date' => now(),
        ]);

        Transactions::create([
            'order_id' => 2,  // Order Katsu Ayam Organik
            'payment_method' => 'debit',
            'transaction_date' => now(),
        ]);
    }
}
