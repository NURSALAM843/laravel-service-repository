<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        // $roles = ['admin',];
        // foreach ($roles as $key => $value) {
        //     Role::create([ 'name' => $value ]);
        // }
        Role::create([ 'name' => 'admin' ]);
        $this->command->info('Seeding Roles has been completed!');
    }
}
