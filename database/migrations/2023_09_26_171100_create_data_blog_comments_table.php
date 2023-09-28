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
        Schema::create('data_blog_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('blog_id')->constrained('data_blogs')->onDelete('cascade');
            $table->string('nama');
            $table->string('email');
            $table->string('subjek');
            $table->string('komentar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_blog_comments');
    }
};
