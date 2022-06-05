<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiendasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tiendas')->insert(
            [['direccion' => 'Jr. Pizarro N° 268 Int.1',
            'ubicacion' => 'Trujillo - Trujillo']]
        );
    }
}
