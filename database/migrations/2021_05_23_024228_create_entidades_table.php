<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entidades', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('tipo_administradora');
            $table->string('código');
            $table->string('nit');
            $table->string('nombre_corto');
            $table->string('solicitud_estados_de_cartera');
            $table->string('solicitud_detalle_de_pagos');
            $table->string('ciudad');
            $table->string('departamento');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('horario_de_atencion');
            $table->string('pagina_web');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entidades');
    }
}
