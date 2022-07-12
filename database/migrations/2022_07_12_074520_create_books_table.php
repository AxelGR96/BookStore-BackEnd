<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('autor',50);
            $table->string('titulo',50);
            $table->string('edicion',50);
            $table->string('datos_publicacion',150);
            $table->string('tipo_contenido',50);
            $table->string('restricciones',250);
            $table->string('materia',50);
            $table->string('proveedor',50);
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
        Schema::dropIfExists('books');
    }
};
