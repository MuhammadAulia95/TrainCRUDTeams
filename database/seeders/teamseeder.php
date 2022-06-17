<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class teamseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'user_id' => '5212512',
            'position_id' => '1351535',
            'photo_team' => 'feqfgweg',
            'moto' => 'Ingin cepat selesai',
            'no_telp' => '08531053184',
        ]);
    }
}
