<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Call RoleSeeder first to create roles
        $this->call([RoleSeeder::class]);

        // Seed users after roles exist
        $this->seedUsers();

        // Additional seeders
        $this->call([ProductsSeeder::class]);
        $this->call([OrdersSeeder::class]);
        $this->call([TransactionsSeeder::class]);
        $this->call([PermissionSeeder::class]);

    }

    private function seedUsers(): void
    {
        // Create Admin user if not exists
        $adminEmail = 'admin@admin.com';
        if (! User::where('email', $adminEmail)->exists()) {
            $admin = User::create([
                'name' => 'Admin',
                'email' => $adminEmail,
                'password' => bcrypt('password'),
            ]);
            $admin->assignRole('super_admin');
        }

        // Create Mahasiswa user if not exists
        $pblEmail = 'pbl@admin.com';
        if (! User::where('email', $pblEmail)->exists()) {
            $pbl = User::create([
                'name' => 'Pembeli',
                'email' => $pblEmail,
                'password' => bcrypt('password'),
            ]);
            $pbl->assignRole('Pembeli');
        }
    }
}
