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
        Schema::create('esemenies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategoria_id')->constrained();
            $table->string('esemeny_nev');
            $table->text('leiras');
            $table->timestamp('datum');
            $table->integer('ar');
            $table->integer('resztvevok');
            $table->string('kepUrl');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('esemenies');
    }
};
