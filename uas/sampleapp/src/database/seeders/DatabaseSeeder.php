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
        $this->call([AthleteSeeder::class]);
        $this->call([CoachesSeeder::class]);
        $this->call([SchedulesSeeder::class]);
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

        // Create Athlete user if not exists
        $athleteEmail = 'athlete@admin.com';
        if (! User::where('email', $athleteEmail)->exists()) {
            $athlete = User::create([
                'name' => 'athlete',
                'email' => $athleteEmail,
                'password' => bcrypt('password'),
            ]);
            $athlete->assignRole('athlete');
        }
    }
}
