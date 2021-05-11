<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre_completo');
            $table->string('tipo_de_identificacion');
            $table->string('identificacion');
            $table->string('codigo_nomina');
            $table->string('cargo');
            $table->string('');
            $table->string('salario');
            $table->string('ingreso_base_cotizacion');
            $table->string('fecha_ingreso_empresa');
            $table->string('condicion');
            $table->string('fecha_retiro_empresa');
            $table->string('fecha_nacimiento');
            $table->string('genero');
            $table->string('id_eps');
            $table->string('fecha_afilicion_eps');
            $table->string('id_afp');
            $table->string('id_arl');
            $table->string('id_caja_compensacion');
            $table->string('email');
            $table->string('telefono');
            $table->string('tipo_de_vinculacion');
            $table->string('ciudad');
            $table->string('departamento');
            $table->string('sede');
            $table->string('centro_de_costos');
            $table->string('subcentro_de_costos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
