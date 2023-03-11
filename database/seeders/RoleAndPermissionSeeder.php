<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $role = Role::create(['name' => 'admin']);
        $role = Role::create(['name' => 'mod']);
        $role = Role::create(['name' => 'editor']);
        $role = Role::create(['name' => 'visitor']);
        $role = Role::create(['name' => 'writer']);
        $permission = Permission::create(['name' => 'can_edit']);
        $permission = Permission::create(['name' => 'can_delete']);
        $permission = Permission::create(['name' => 'can_update']);
        $permission = Permission::create(['name' => 'can_create']);
        $permission = Permission::create(['name' => 'can_view']);
    }
}
