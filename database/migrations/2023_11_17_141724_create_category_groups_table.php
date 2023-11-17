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
        Schema::dropIfExists('category_groups');
        Schema::create('category_groups', function (Blueprint $table) {
            $table->unsignedBigInteger('group_id');
            $table->string('group_name_ua');
            $table->string('group_name_eng')->nullable();
            $table->timestamps();

            $table->primary('group_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_groups');
    }
};
