<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Blogger']);

        Permission::create(['name' => 'manage-blog']);
        Permission::create(['name' => 'admin.categories']);
        Permission::create(['name' => 'admin.tags']);
        Permission::create(['name' => 'admin.posts']);
        Permission::create(['name' => 'admin.users']);

        $role1->givePermissionTo([
            'admin.categories',
            'admin.tags',
            'admin.posts',
            'admin.users',
            'manage-blog'
        ]);

        $role2->givePermissionTo([
            'admin.posts'
        ]);

    }
}
