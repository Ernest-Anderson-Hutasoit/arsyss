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
        Schema::create('jaksa_p16a', function (Blueprint $table) {
            $table->id();
            $table->foreignId('p16a_id')->constrained()->cascadeOnDelete();
            $table->foreignId('jaksa_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jaksa_p16a');
    }
};
