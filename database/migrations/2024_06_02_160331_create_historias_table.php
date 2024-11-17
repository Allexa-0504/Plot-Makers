<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historias');
    }
    public function up(): void
    {
        Schema::create('historias', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('genero_id');
            $table->string('titulo', 50);
            $table->longText('conteudo');
            $table->dateTime('data_postada');
            $table->tinyInteger('destaque');
            $table->string('capa', 255)->nullable();
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('users');
            $table->foreign('genero_id')->references('id')->on('generos');
        });
    }

    /**
     * Reverse the migrations.
     */

};
