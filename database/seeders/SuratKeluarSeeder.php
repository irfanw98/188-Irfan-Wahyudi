<?php

namespace Database\Seeders;

use App\Models\SuratKeluar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuratKeluarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $SuratKeluar = [
            [
                'user_id'       => 1,
                'no_letter'     => 'ABC/12345-00-00-123/XXX',
                'regarding'     => 'Project xxx',
                'purpose'       => 'Rapat vendor project xxx',
                'date_letter'   => '2024-05-21',
                'file'          => 'filexxx'
            ],
            [
                'user_id'       => 1,
                'no_letter'     => 'ABC/12345-00-00-123/XYZ',
                'regarding'     => 'Dinas',
                'purpose'       => 'Tinjauan dinas ke kota xxx',
                'date_letter'   => '2024-05-22',
                'file'          => 'filexyz'
            ]
        ];

        SuratKeluar::insert($SuratKeluar);
    }
}