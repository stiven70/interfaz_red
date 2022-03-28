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
        Schema::create('audios', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->date('fecha');
            $table->string('enlace_ruta');
            $table->string('cod_archivo');
            $table->string('enlace_guion');
            $table->string('duracion');
            $table->string('descripcion')->nullable();

            $table->foreignId('estructura_id')
            ->nullable()
            ->constrained('estructuras')
            ->cascadeOnDelete()
            ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('audios');
    }
};
