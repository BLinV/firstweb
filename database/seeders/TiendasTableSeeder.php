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
        $data = [['nombre' => 'Ovatec 1',
                'direccion' => 'Jr. Pizarro Cuadra 1 Oficina 102, antes de la OR',
                'ubicacion' => 'Trujillo - Trujillo'],
                ['nombre' => 'Oliver Master',
                'direccion' => 'Jr. Pizarro Cuadra 2, frente a la iglesia Santo Domingo',
                'ubicacion' => 'Trujillo - Trujillo'],
                ['nombre' => 'Ovatec 3',
                'direccion' => 'Jr. Pizarro Cuadra 3 Oficina 137, pasaje Extremadura',
                'ubicacion' => 'Trujillo - Trujillo']];
        DB::table('tiendas')->insert($data);
    }
}
