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
        Schema::create('knowledges', function (Blueprint $table) {
            $table->unsignedBigInteger('knowledge_id');
            $table->string('knowledge_title');
            $table->text('knowledge_desc_ua')->nullable();
            $table->text('knowledge_desc_eng')->nullable();
            $table->unsignedBigInteger('AccessTypes_type_id');
            $table->unsignedBigInteger('Subjects_subject_id');
            $table->timestamps();

            $table->primary('knowledge_id');
            $table->foreign('AccessTypes_type_id')->references('type_id')->on('access_types');
            $table->foreign('Subjects_subject_id')->references('subject_id')->on('subjects');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('knowledges');
    }
};
