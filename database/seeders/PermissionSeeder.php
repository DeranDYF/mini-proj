<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::updateOrCreate(['email' => 'admin.dyfzn@gmail.com'], [
            'name' => 'Admin',
            'email' => 'admin.dyfzn@gmail.com',
            'password' => Hash::make('admin.dyfzn'),
        ]);

        //Role
        $admin = Role::updateOrCreate(
            ['name' => 'admin', 'guard_name' => 'web'],
            ['name' => 'admin', 'guard_name' => 'web']
        );
        $seller = Role::updateOrCreate(
            ['name' => 'seller', 'guard_name' => 'web'],
            ['name' => 'seller', 'guard_name' => 'web']
        );
        $user = Role::updateOrCreate(
            ['name' => 'user', 'guard_name' => 'web'],
            ['name' => 'user', 'guard_name' => 'web']
        );

        // Menu Permission 
        $dashboard = Permission::updateOrCreate(
            ['name' => 'dashboard', 'guard_name' => 'web'],
            ['name' => 'dashboard', 'guard_name' => 'web']
        );

        $product = Permission::updateOrCreate(
            ['name' => 'product', 'guard_name' => 'web'],
            ['name' => 'product', 'guard_name' => 'web']
        );

        $sales = Permission::updateOrCreate(
            ['name' => 'sales', 'guard_name' => 'web'],
            ['name' => 'sales', 'guard_name' => 'web']
        );

        $users = Permission::updateOrCreate(
            ['name' => 'user', 'guard_name' => 'web'],
            ['name' => 'user', 'guard_name' => 'web']
        );

        $role = Permission::updateOrCreate(
            ['name' => 'role', 'guard_name' => 'web'],
            ['name' => 'role', 'guard_name' => 'web']
        );

        $admin->givePermissionTo($dashboard);
        $user->givePermissionTo($dashboard);
        $seller->givePermissionTo($dashboard);

        $admin->givePermissionTo($product);
        $seller->givePermissionTo($product);

        $admin->givePermissionTo($sales);
        $seller->givePermissionTo($sales);

        $admin->givePermissionTo($users);
        $admin->givePermissionTo($role);

        $user_find = User::find(1);
        $user_find->assignRole('admin');
    }
}
