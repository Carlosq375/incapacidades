<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('razon_social');
            $table->string('nit');
            $table->string('digito_de_verificacion');
            $table->string('nombre_comercial');
            $table->string('direccion');
            $table->string('ciudad');
            $table->string('departamento');
            $table->string('telefono');
            $table->string('email');
            $table->string('representante_legal');
            $table->string('identificacion_repte_legal');
            $table->string('tipo_de_identificacion_repte_legal');
            $table->date('fecha_pago_seguridad_social');
            $table->string('camara_de_comercio');
            $table->date('fecha_de_expedición_ccio');
            $table->string('certificación_bancaria');
            $table->date('fecha_de_expedición_cban');  
            $table->string('contacto_gestion_humana');        
            $table->string('telefono_gest_hum');
            $table->string('email_gest_hum');
            $table->string('contacto_tesoreria');
            $table->string('telefono_tes');
            $table->string('email_tes');
            $table->string('contacto_bienestar');
            $table->string('telefono_bie');
            $table->string('email_bie');
            $table->string('contacto_sgsst');
            $table->string('email_sgsst');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresa');
    }
}
