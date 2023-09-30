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
        Schema::create('data_dosen_tendiks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('foto');
            $table->string('nama');
            $table->string('lulusan')->nullable();
            $table->string('pangkalan')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('nip');
            $table->string('nidn')->nullable();
            $table->enum('role', ['dosen', 'tendik']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_dosen_tendiks');
    }
};
