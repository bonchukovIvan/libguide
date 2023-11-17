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
        Schema::dropIfExists('authors');
        Schema::create('authors', function (Blueprint $table) {
            $table->unsignedBigInteger('author_id');
            $table->string('author_name_ua');
            $table->string('author_name_eng')->nullable();
            $table->string('author_email')->nullable();
            $table->string('author_phone')->nullable();
            $table->string('author_location_ua')->nullable();
            $table->string('author_location_eng')->nullable();
            $table->string('author_avatar_path')->nullable();
            $table->timestamps();

            $table->primary('author_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('authors');
    }
};
