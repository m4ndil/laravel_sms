<?php

namespace Database\Seeds;

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'reg_no'         => 'NCCS0003',
                'email'          => 'admin@admin.com',
                'password'       => Hash::make('password'),
                'remember_token' => null,
                'created_at'     => '2023-12-17 14:13:32',
                'updated_at'     => '2023-12-17 14:13:32',
                'deleted_at'     => null,
            ],
            [
                'id'             => 2,
                'reg_no'         => 'NCCS0002',
                'email'          => 'teacher@teacher.com',
                'password'       => Hash::make('password'),
                'remember_token' => null,
                'created_at'     => '2023-12-17 14:13:32',
                'updated_at'     => '2023-12-17 14:13:32',
                'deleted_at'     => null,
            ],
            [
                'id'             => 3,
                'reg_no'         => 'NCCS0001',
                'email'          => 'student@student.com',
                'password'       => Hash::make('password'),
                'remember_token' => null,
                'created_at'     => '2023-12-17 14:13:32',
                'updated_at'     => '2023-12-17 14:13:32',
                'deleted_at'     => null,
            ]
        ];

        User::insert($users);
    }
}
