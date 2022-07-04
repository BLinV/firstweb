<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlmacenProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('almacen-producto', function (Blueprint $table) {
            $table->integer('id_prod')->unsigned();
            $table->foreign(['id_prod'])->references(['id_prod'])->on('productos');
            $table->integer('id_proveedor')->unsigned();
            $table->foreign(['id_proveedor'])->references(['id_proveedor'])->on('proveedores');
            $table->integer('id_tiend')->unsigned();
            $table->foreign('id_tiend')->references('id_tiend')->on('tiendas');
            $table->primary(['id_prod', 'id_proveedor', 'id_tiend']);
            $table->integer('stock_min')->unsigned();
            $table->integer('stock_max')->unsigned();
            $table->integer('stock_act')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('almacen-producto');
    }
}
