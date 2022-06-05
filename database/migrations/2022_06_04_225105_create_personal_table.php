<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal', function (Blueprint $table) {
            $table->Increments('id_per');
            $table->char('dni',8);
            $table->char('nom_per',70);
            $table->date('fec_nac');
            $table->char('est_civ',1);
            $table->char('num_tel_cel',9);
            $table->char('direccion',100);
            $table->integer('id_cargo')->unsigned();
            $table->integer('id_tiend')->unsigned();
            $table->foreign('id_tiend')->references('id_tiend')->on('tiendas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal');
    }
}
