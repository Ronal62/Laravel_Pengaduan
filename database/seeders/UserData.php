<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'Administator',
                'username' => 'admin',
                'password' => bcrypt('123456'),
                'level' => 1,
                'email' => 'admin@ronal.com'
            ],
            [
                'name' => 'Kasir',
                'username' => 'kasir',
                'password' => bcrypt('123456'),
                'level' => 1,
                'email' => 'kasir@ronal.com'
            ],
            [
                'name' => 'Pimpinan',
                'username' => 'pimpinan',
                'password' => bcrypt('123456'),
                'level' => 1,
                'email' => 'pimpinan@ronal.com'
            ],
            [
                'name' => 'User',
                'username' => 'user',
                'password' => bcrypt('123456'),
                'level' => 1,
                'email' => 'user@ronal.com'
            ],

        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
