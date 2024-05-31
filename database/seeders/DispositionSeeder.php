<?php

namespace Database\Seeders;

use App\Models\Disposisi;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DispositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dispositions = [
            [
                'user_id'            => 3,
                'incoming_letter_id' => 1,
                'purpose'            => 'Rapat bulanan hasil project xxx',
                'content'            => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit facilis molestias quod maxime officiis saepe nobis corporis a placeat accusantium qui debitis vero necessitatibus tempore laudantium tenetur, ad incidunt praesentium?
                Itaque earum deserunt, placeat a mollitia omnis ipsam, soluta rerum animi facilis esse? Consequuntur itaque dicta et nam voluptatum exercitationem ad? Praesentium obcaecati aliquam molestiae, quasi ex quo ab quas!',
                'status'             => 1,
                'deadline'           => '2024-05-31',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now()
            ],
            [
                'user_id'            => 4,
                'incoming_letter_id' => 2,
                'purpose'            => 'Rapat bulanan hasil project xxx',
                'content'            => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit facilis molestias quod maxime officiis saepe nobis corporis a placeat accusantium qui debitis vero necessitatibus tempore laudantium tenetur, ad incidunt praesentium?
                Itaque earum deserunt, placeat a mollitia omnis ipsam, soluta rerum animi facilis esse? Consequuntur itaque dicta et nam voluptatum exercitationem ad? Praesentium obcaecati aliquam molestiae, quasi ex quo ab quas!',
                'status'             => 1,
                'deadline'           => '2024-06-01',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now()
            ]
        ];

        Disposisi::insert($dispositions);
    }
}