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
        Schema::create('sujets', function (Blueprint $table) {
            $table->id();
            $table->string('matricule');
            $table->string('genre');
            $table->date('date_naissance');
            $table->string('race');
            $table->string('poids');
            $table->string('note');
            $table->unsignedBigInteger('lot_id');
            $table->foreign('lot_id')->references('id')->on('lots')->onDelete('cascade');
            $table->string('matricule_parent');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sujets');
    }
};
