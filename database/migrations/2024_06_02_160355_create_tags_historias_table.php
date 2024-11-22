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
        Schema::create('tags_historias', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('tag_id')->constrained('tags')->cascadeOnDelete();
            $table->foreignId('historias_id')->constrained('historias')->cascadeOnDelete();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags_historias');
    }
};
