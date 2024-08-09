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
        Schema::create('pivot_learning_class_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('learning_id')->references('id')->on('learnings')->onDelete('cascade');
            $table->foreignId('class_category_id')->references('id')->on('class_categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pivot_learning_class_categories');
    }
};
