<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentosIncapacidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos_incapacidades', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('tipo_de_documento');
            $table->string('ubicacion');
            $table->string('id_incapacidades');
            $table->string('fecha_expedicion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documentos_incapacidades');
    }
}
