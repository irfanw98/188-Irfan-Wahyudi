<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
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
                'role_id'   => 1,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'name'      => 'Bambang Irawan',
                'email'     => 'bambang@gmail.com',
                'password'  => bcrypt('bambang123'),
                'position'  => 'pimpinan',
                'phone'     => '087766591519',
                'role_id'   => 2,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'name'      => 'Tito Dermawan',
                'email'     => 'tito@gmail.com',
                'password'  => bcrypt('tito123'),
                'position'  => 'Staff IT',
                'phone'     => '089655591512',
                'role_id'   => 3,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'name'      => 'Aisyah',
                'email'     => 'aisyah@gmail.com',
                'password'  => bcrypt('aisyah123'),
                'position'  => 'Marketing',
                'phone'     => '085655591712',
                'role_id'   => 3,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ]
        ];

        User::insert($users);
    }
}