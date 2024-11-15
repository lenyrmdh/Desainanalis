<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        // Hapus semua data tanpa me-reset auto-increment
        Products::query()->delete();

        // Seed data baru
        Products::create([
            'name' => 'Nugget Sayur',
            'price' => 50000,
            'stock' => 100,
            'description' => 'Nugget sayur sehat, terbuat dari sayuran segar dan tanpa pengawet.'
        ]);

        Products::create([
            'name' => 'Tempe Crispy',
            'price' => 30000,
            'stock' => 200,
            'description' => 'Tempe goreng renyah dan gurih.'
        ]);

        Products::create([
            'name' => 'Sosis Kzanler',
            'price' => 45000,
            'stock' => 35,
            'description' => 'Sosis siap saji.'
        ]);

        Products::create([
            'name' => 'Baso Aci',
            'price' => 10500,
            'stock' => 5,
            'description' => 'Baso aci asli bandung.'
        ]);

        Products::create([
            'name' => 'Seblak Instan',
            'price' => 25000,
            'stock' => 150,
            'description' => 'Seblak instan pedes mantul.'
        ]);
    }
}
