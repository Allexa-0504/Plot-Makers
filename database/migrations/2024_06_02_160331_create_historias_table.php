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
            $table->id('id');
            $table->foreignId('usuario_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('genero_id')->constrained('generos')->cascadeOnDelete();
            $table->string('titulo', 50);
            $table->longText('conteudo');
            $table->timestamp('data_postada');
            $table->tinyInteger('destaque');
            $table->text('descricao')->nullable();
            $table->string('capa', 255)->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */

};
