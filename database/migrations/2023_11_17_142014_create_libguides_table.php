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
        Schema::create('libguides', function (Blueprint $table) {
            $table->unsignedBigInteger('libguide_id');
            $table->string('libguide_title_ua');
            $table->string('libguide_title_eng')->nullable();
            $table->text('libguide_desc_ua')->nullable();
            $table->text('libguide_desc_eng')->nullable();
            $table->unsignedBigInteger('Categories_category_id')->nullable();
            $table->timestamps();

            $table->primary('libguide_id');
            $table->foreign('Categories_category_id')
                ->references('category_id')
                ->on('categories')
                ->onUpdate('set null')
                ->onDelete('set null');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libguides');
    }
};
