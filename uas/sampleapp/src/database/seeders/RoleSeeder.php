<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        // Ensure roles exist
        $athleteRole = Role::firstOrCreate(['name' => 'athlete', 'guard_name' => 'web']);
        $adminRole = Role::firstOrCreate(['name' => 'super_admin', 'guard_name' => 'web']);

        // Assign roles to specific users based on email
        $athleteUser = User::where('email', 'athlete@admin.com')->first();
        $adminUser = User::where('email', 'admin@admin.com')->first();

        if ($athleteUser) {
            $athleteUser->assignRole($athleteRole);
        }

        if ($adminUser) {
            $adminUser->assignRole($adminRole);
        }
    }
}
