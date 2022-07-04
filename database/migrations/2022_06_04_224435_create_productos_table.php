<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->Increments('id_prod');
            $table->integer('id_proveedor')->unsigned();
            $table->foreign('id_proveedor')->references('id_proveedor')->on('proveedores');
            $table->char('nom',80);
            $table->string('ficha');
            //$table->double('costo_envio',8,2);
            $table->char('descripcion',100);
            $table->integer('id_categoria')->unsigned();
            $table->decimal('prec_vent',8,2);
            $table->decimal('prec_comp',8,2);
            //$table->unsignedInteger('brand_id')->unsigned();
            $table->tinyInteger('garantia')->default(1)->unsigned();
            $table->boolean('obsequio')->default(0);
            $table->boolean('seg_mano')->default(0);
            $table->string('image_path');
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
        Schema::dropIfExists('productos');
    }
}
