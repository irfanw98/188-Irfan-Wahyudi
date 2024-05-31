<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SuratMasuk;
use Carbon\Carbon;

class SuratMasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $SuratMasuk = [
            [
                'user_id'       => 1,
                'sender_id'     => 1,
                'no_letter'     => 'ABC/12345-00-00-123/XXX',
                'regarding'     => 'Undangan',
                'date_letter'   => '2024-05-21',
                'date_received' => Carbon::now(),
                'file'          => 'filexxx'
            ],
            [
                'user_id'       => 1,
                'sender_id'     => 2,
                'no_letter'     => 'ABC/54321-00-00-123/ZZZ',
                'regarding'     => 'Rapat',
                'date_letter'   => '2024-05-23',
                'date_received' => Carbon::now(),
                'file'          => 'filezz'
            ],
        ];

        SuratMasuk::insert($SuratMasuk);
    }
}