<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name'      => 'Anisa Azizah',
                'email'     => 'anisa@gmail.com',
                'password'  => bcrypt('anisa123'),
                'position'  => 'administrasi',
                'phone'     => '0856651234276',
                'role_id'   => 1
            ],
            [
                'name'      => 'Bambang Irawan',
                'email'     => 'bambang@gmail.com',
                'password'  => bcrypt('bambang123'),
                'position'  => 'pimpinan',
                'phone'     => '087766591519',
                'role_id'   => 2
            ],
            [
                'name'      => 'Tito Dermawan',
                'email'     => 'tito@gmail.com',
                'password'  => bcrypt('tito123'),
                'position'  => 'Staff IT',
                'phone'     => '089655591512',
                'role_id'   => 3
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}