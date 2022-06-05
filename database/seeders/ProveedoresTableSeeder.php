<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProveedoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proveedores')->insert(
            [['ruc' => '20212331377',
            'raz_soc' => 'GRUPO DELTRON S.A.',
            'num_tel_cel' => '014150101',
            'direccion' => 'CAL. RAUL REBAGLIATI - 170 - - URB. SANTA CATALINA'],
            ['ruc' => '20267163228',
            'raz_soc' => 'INGRAM MICRO S.A.C.',
            'num_tel_cel' => '080046472',
            'direccion' => 'Av. Jorge Basadre 157 6to piso - San Isidro'],
            ['ruc' => '20123053037',
            'raz_soc' => 'COMPUDISKETT S R L',
            'num_tel_cel' => '511143800',
            'direccion' => 'Av. República de Chile 504 Jesús Marí­a - Lima']]
        );
    }
}
