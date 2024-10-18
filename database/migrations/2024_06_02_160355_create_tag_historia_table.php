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
        Schema::create('tag_historia', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->unsignedBigInteger('tag_id');
            $table->unsignedBigInteger('historia_id');
            $table->timestamps();

            $table->foreign('tag_id')->references('id')->on('tag');
            $table->foreign('historia_id')->references('id')->on('historia');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tag_historia');
    }
};
