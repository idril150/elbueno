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
        Schema::create('opcion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('encuesta_id');
            $table->text('resp');
            $table->timestamps();

            $table->foreign('encuesta_id')->references('id')->on('encuestas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opcion');
    }
};
