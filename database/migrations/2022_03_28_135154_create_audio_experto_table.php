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
        Schema::create('audio_experto', function (Blueprint $table) {
            $table->id();

            $table->foreignId('audio_id')
            ->nullable()
            ->constrained('audios')
            ->cascadeOnDelete()
            ->nullOnDelete();

            $table->foreignId('experto_id')
            ->nullable()
            ->constrained('expertos')
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
        Schema::dropIfExists('audio_experto');
    }
};
