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
        Schema::create('categories', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id');
            $table->string('category_name_ua');
            $table->string('category_name_eng')->nullable();
            $table->unsignedBigInteger('CategoryGroups_group_id')
                ->unique()
                ->nullable();
            $table->timestamps();

            $table->primary('category_id');
            $table->foreign('CategoryGroups_group_id')
                ->references('group_id')
                ->on('category_groups')
                ->onUpdate('set null')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
