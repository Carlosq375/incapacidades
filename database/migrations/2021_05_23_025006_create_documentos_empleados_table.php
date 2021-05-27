<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentosEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos_empleados', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('tipo_de_documento');
            $table->date('fecha_de_expedicion');
            $table->string('ubicacion');
            $table->string('id_empleado');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documentos_empleados');
    }
}
