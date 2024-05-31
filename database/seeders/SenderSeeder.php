<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pengirim;

class SenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $senders = [
            [
                'name'      => 'Ani',
                'email'     => 'ani@gmail.com',
                'address'   => 'Jl.XXX NO.01. Cirebon, Jawa Barat',
                'phone'     => '0856651234276',
            ],
            [
                'name'      => 'Budi',
                'email'     => 'budi@gmail.com',
                'address'   => 'Jl.XXX NO.01. Jakarta Timur, DKI Jakarta',
                'phone'     => '087766591519',
            ],
            [
                'name'      => 'Tono',
                'email'     => 'tono@gmail.com',
                'address'   => 'Jl.XXX NO.03. Jakarta Barat, DKI Jakarta',
                'phone'     => '087766591123',
            ],
        ];

        Pengirim::insert($senders);
    }
}