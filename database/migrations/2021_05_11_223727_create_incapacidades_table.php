<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncapacidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incapacidades', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('caja_de_compensacion');
            $table->string('tipo_vinculacion');
            $table->string('condicion_actual_usuario');
            $table->string('sede');
            $table->string('resultados_valoracion');
            $table->string('periodo_de_incapacidad');
            $table->string('identificacion_empleado');
            $table->string('origen');
            $table->string('clasificacion');
            $table->string('atencion');
            $table->string('fecha_inicio');
            $table->string('fecha_final');
            $table->string('dias');
            $table->string('fecha_de_pago_en_nomina');
            $table->string('valor_empresa');
            $table->string('valor_administradora');
            $table->string('valor_ajuste');
            $table->string('entidad');
            $table->string('diagnostico');
            $table->string('profesional_responsable');
            $table->string('institucion_que_genera');
            $table->string('documentos');
            $table->string('estado');      
                     

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incapacidades');
    }
}
