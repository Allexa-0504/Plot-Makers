<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comentario', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('historia_id');
            $table->smallInteger('avaliacao');
            $table->longText('conteudo');
            $table->dateTime('data_post');
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('users');
            $table->foreign('historia_id')->references('id')->on('historia');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentario');
    }
};
