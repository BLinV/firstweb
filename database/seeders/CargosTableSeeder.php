<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CargosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cargos')->insert(
            [['desc' => 'Inactivo'],
            ['desc' => 'Gerente'],
            ['desc' => 'Ejecutivo de Ventas'],
            ['desc' => 'Encargado de Soporte Tecnico'],
            ['desc' => 'Encargado de Caja'],
            ['desc' => 'Operador Logistico']]
        );
    }
}
