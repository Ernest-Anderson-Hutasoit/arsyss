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
        Schema::create('perkaras', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_pidana');
            $table->string('nomor_register');
            $table->string('nomor_sprindik');
            $table->string('jenis');
            $table->string('pasal_dakwaan');
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perkaras');
    }
};
