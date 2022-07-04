<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert(
            ['id_proveedor' => 1,
            'nom' => 'MacBook Pro',
            'ficha' => 'macbook-pro',
            'descripcion' => '15 pulgadas, 1TB HDD, 32GB RAM',
            'prec_vent' => 2499.99,
            'prec_comp' => 2000.99,
            //'description' => 'MackBook Pro',
            'id_categoria' => 1,
            //'brand_id' => 1,
            'image_path' => 'macbook-pro.png'],
            ['id_proveedor' => 2,
            'nom' => 'Dell Vostro 3557',
            'ficha' => 'vostro-3557',
            'descripcion' => '15 pulgadas, 1TB HDD, 8GB RAM',
            'prec_vent' => 1499.99,
            'prec_comp' => 1000.99,
            //'description' => 'Dell Vostro 3557',
            'id_categoria' => 1,
            //'brand_id' => 2,
            'image_path' => 'dell-v3557.png'],
            ['id_proveedor' => 1,
            'nom' => 'iPhone 11 Pro',
            'ficha' => 'iphone-11-pro',
            'descripcion' => '6.1 pulgadas, 64GB 4GB RAM',
            'prec_vent' => 649.99,
            'prec_comp' => 500.99,
            //'description' => 'iPhone 11 Pro',
            'id_categoria' => 2,
            //'brand_id' => 1,
            'image_path' => 'iphone-11-pro.png'],
            ['id_proveedor' => 3,
            'nom' => 'Remax 610D Headset',
            'ficha' => 'remax-610d',
            'descripcion' => '6.1 pulgadas, 64GB 4GB RAM',
            'prec_vent' => 8.99,
            'prec_comp' => 2.89,
            //'description' => 'Remax 610D Headset',
            'id_categoria' => 3,
            //'brand_id' => 3,
            'image_path' => 'remax-610d.jpg'],
            ['id_proveedor' => 2,
            'nom' => 'Samsung LED TV',
            'ficha' => 'samsung-led-24',
            'descripcion' => '24 pulgadas, LED Display, Resolución 1366 x 768',
            'prec_vent' => 41.99,
            'prec_comp' => 12.59,
            //'description' => 'Samsung LED TV',
            'id_categoria' => 4,
            //'brand_id' => 4,
            'image_path' => 'samsung-led-24.png'],
            ['id_proveedor' => 2,
            'nom' => 'Samsung Camara Digital',
            'ficha' => 'samsung-mv800',
            'descripcion' => '16.1MP, 5x Optical Zoom',
            'prec_vent' => 144.99,
            'prec_comp' => 70.39,
            //'description' => 'Samsung Digital Camera',
            'id_categoria' => 5,
            //'brand_id' => 4,
            'image_path' => 'samsung-mv800.jpg'],
            ['id_proveedor' => 1,
            'nom' => 'Huawei GR 5 2017',
            'ficha' => 'gr5-2017',
            'descripcion' => '5.5 pulgadas, 32GB 4GB RAM',
            'prec_vent' => 148.99,
            'prec_comp' => 80.79,
            //'description' => 'Huawei GR 5 2017',
            'id_categoria' => 2,
            //'brand_id' => 5,
            'image_path' => 'gr5-2017.jpg']
        );
    }
}
