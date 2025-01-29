<?php

namespace Database\Seeders;

use App\Models\Athlete;
use App\Models\Coach;
use App\Models\Schedule;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        // Create permissions for managing athletes, coaches, and schedules
        $permissions = [
            'view_athletes',
            'create_athletes',
            'update_athletes',
            'delete_athletes',
            'view_coaches',
            'create_coaches',
            'update_coaches',
            'delete_coaches',
            'view_schedules',
            'create_schedules',
            'update_schedules',
            'delete_schedules',
        ];

        // Create permissions if they don't exist
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Get or create the 'admin' role
        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        // Get or create the 'athlete' role
        $athleteRole = Role::firstOrCreate(['name' => 'athlete']);

        // Assign the permissions to the 'admin' role
        $adminRole->syncPermissions($permissions);

        // Assign only view permissions to the 'athlete' role
        $athleteRole->syncPermissions([
          'view_athletes',
          'view_schedules',
          
      ]);
    }
}
