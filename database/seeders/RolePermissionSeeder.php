<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//use Spatie\Permission\Contracts\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create permission
        Permission::create(['name' => 'show dashboard']);
        Permission::create(['name' => 'show home']);
        Permission::create(['name' => 'show konten']);
        Permission::create(['name' => 'show sejarah']);
        Permission::create(['name' => 'show kisah inspiratif']);
        Permission::create(['name' => 'show users']);
        Permission::create(['name' => 'show events']);
        Permission::create(['name' => 'show profile']);
        Permission::create(['name' => 'show default_profile']);
        Permission::create(['name' => 'show nontifikasi']);
        // $admin = Permission::create(['name' => 'show dashboard', 'show event', 'show konten', 'show profile', 'show users']);
        // $superAdmin = Permission::create(['name' => 'show home', 'show kisah inspiratif', 'show sejarah']);

        // create role
        $superAdmin = Role::create([
            'name' => 'super admin',
            'guard_name' => 'web'
        ]);

        $admin = Role::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);

        $user = Role::create([
            'name' => 'user',
            'guard_name' => 'web'
        ]);


        // create access permission
        $superAdmin->givePermissionTo([
            'show dashboard',
            'show events',
            'show konten',
            'show users',
            'show profile',
            'show nontifikasi'
        ]);

        $admin->givePermissionTo([
            'show dashboard',
            'show events',
            'show konten',
            'show profile',
        ]);

        $user->givePermissionTo([
            'show home',
            'show sejarah',
            'show kisah inspiratif',
            'show default_profile'
        ]);



        // $superAdminRole = Role::findById(1);
        // $superAdminRole->assignRole('super admin');

        // $adminRole = Role::findById(2);
        // $adminRole->assignRole('admin');

    }
}
