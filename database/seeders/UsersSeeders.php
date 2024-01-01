<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users =  [
            $users =  [
                'name'  => 'Admin',
                'email' => 'admin@admin.com',
                'role'  => 'admin',
            ], [
                'name'  => 'Admin2',
                'email' => 'admin2@admin.com',
                'role'  => 'admin',
            ]
        ];

        foreach ($users as $key => $value) {
            $user = User::create([
                'name'      => $value['name'],
                'email'     => $value['email'],
                'password'  => bcrypt('123123')
            ]);

            $user->syncRoles([$value['role']]);
        }
        $this->command->info('Seeding User has been completed!');
    }
}
