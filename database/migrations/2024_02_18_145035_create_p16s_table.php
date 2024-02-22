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
        Schema::create('p16s', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Perkara::class)->constrained()
                ->cascadeOnDelete();

            $table->string('nomor');
            $table->date('tanggal');
            $table->binary('gambar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('p16s');
    }
};
