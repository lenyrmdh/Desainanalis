<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        // Create permissions if they don't exist
        $permissions = [
            'view_orders',
            'view_products',
            'view_any_orders',
            'view_any_products',
            'create_orders',
            'update_orders',
            'delete_orders',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Get or create the 'mahasiswa' role
        $role = Role::firstOrCreate(['name' => 'Pembeli']);

        // Assign the permissions to the 'mahasiswa' role
        $role->givePermissionTo($permissions);
    }
}