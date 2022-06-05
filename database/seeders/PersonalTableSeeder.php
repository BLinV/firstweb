<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('personal')->insert(
            [['dni' => '11111111',
            'nom_per' => 'Mario Jose Alberto',
            'fec_nac' => '1990-01-10',
            'est_civ' => 'S',
            'num_tel_cel' => '936984002',
            'direccion' => '382 Socrates - Trujillo - La Libertad',
            'id_cargo' => '2',
            'id_tiend' => '1'],
            ['dni' => '11111112',
            'nom_per' => 'Dario Veltran Marvin',
            'fec_nac' => '1985-03-10',
            'est_civ' => 'S',
            'num_tel_cel' => '936984003',
            'direccion' => '618 Av. Carlos Valderrama - Trujillo - La Libertad',
            'id_cargo' => '3',
            'id_tiend' => '1']]
        );
    }
}
