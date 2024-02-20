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
        Schema::create('barangbuktis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nomor_register');
            $table->date('tanggal');
            $table->unsignedBigInteger('perkiraan');
            $table->text('lokasi');
            $table->unsignedInteger('jumlah');
            $table->string('jenis_satuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangbuktis');
    }
};
