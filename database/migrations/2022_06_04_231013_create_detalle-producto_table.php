<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle-producto', function (Blueprint $table) {
            $table->integer('id_prod')->unsigned();
            $table->integer('id_proveedor')->unsigned();
            $table->foreign('id_prod')->references('id_prod')->on('productos');
            $table->foreign('id_proveedor')->references('id_proveedor')->on('proveedores');
            $table->primary(['id_prod', 'id_proveedor']);
            $table->char('descripcion',100);
            $table->integer('id_categoria')->unsigned();
            $table->decimal('prec_vent',8,2);
            $table->decimal('prec_comp',8,2);
            $table->tinyInteger('garantia')->default(1)->unsigned();
            $table->boolean('obsequio')->default(0);
            $table->boolean('seg_mano')->default(0);
	//img_prod		blob	not null,
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle-producto');
    }
}
