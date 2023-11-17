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
        Schema::create('guides', function (Blueprint $table) {
            $table->unsignedBigInteger('guide_id');
            $table->string('guide_title_ua')->nullable();
            $table->string('guide_title_eng')->nullable();
            $table->longText('guide_content_ua')->nullable();
            $table->longText('guide_content_eng')->nullable();
            $table->unsignedBigInteger('Libguides_libguide_id')->nullable();
            $table->timestamps();

            $table->primary('guide_id');
            $table->foreign('Libguides_libguide_id')
                ->references('libguide_id')
                ->on('libguides')
                ->onUpdate('set null')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guides');
    }
};
