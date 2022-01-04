<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = collect([
            [
                'name' => 'Arip Sadewa',
                'email' => 'emailnyaarip@gmail.com',
                'password' => bcrypt('superpassword'),
                'role' => '1',
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Arip Admin',
                'email' => 'find.arip@gmail.com',
                'password' => bcrypt('adminpassword'),
                'role' => '2',
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Arip User',
                'email' => 'aripxf@gmail.com',
                'password' => bcrypt('userpassword'),
                'role' => '3',
                'email_verified_at' => now(),
            ],
        ])->each(function ($user) {
            User::Create($user);
        });
    }
}
