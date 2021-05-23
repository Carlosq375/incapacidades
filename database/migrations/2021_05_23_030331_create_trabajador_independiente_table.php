<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrabajadorIndependienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajador_independiente', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre_completo');
            $table->string('tipo_de_documento');
            $table->string('numero_de_documento');
            $table->string('digito_de_verificacion');
            $table->string('nombre_comercial');
            $table->string('direccion');
            $table->string('ciudad');
            $table->string('departamento');
            $table->string('telefono');
            $table->string('email');
            $table->date('fecha_de_pago_seguridad_social');           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trabajador_independiente');
    }
}
