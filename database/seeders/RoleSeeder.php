<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $adminRole = Role::create(['name' => 'admin']);
        $permission = Permission::create(['name' => 'manage notes']);

        $adminRole->givePermissionTo($permission);

        $user = User::factory()->create([
            'email' => 'admin@test.com'
        ]);

        $user->assignRole('admin');
    }
}
