<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitasFisicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitas_fisicas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('numero_de_cedula')->nullable();
            $table->string('año')->nullable();
            $table->date('fecha_de_cedula')->nullable();
            $table->string('calle')->nullable();
            $table->string('colonia')->nullable();
            $table->string('alcaldia')->nullable();
            $table->string('cuenta_catastral')->nullable();
            $table->string('uso')->nullable();
            $table->string('superficie_del_terreno')->nullable();
            $table->string('folio_de_solicitud')->nullable();
            $table->string('oficio_de_solicitud')->nullable();
            $table->string('referencia')->nullable();
            $table->string('realizo')->nullable();
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
        Schema::dropIfExists('visitas_fisicas');
    }
}
