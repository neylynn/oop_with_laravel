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
            $table->id();
            $table->string('name'); // Name of the category
            $table->string('slug')->unique()->nullable(); // URL-friendly identifier for the category
            $table->text('description')->nullable(); // Description of the category
            $table->unsignedBigInteger('parent_id')->nullable(); // Parent category for nested categories
            $table->integer('order')->default(0); // Display order
            $table->boolean('is_active')->default(true); // Whether the category is active
            $table->timestamps(); // Created at and updated at
            $table->foreign('parent_id')->references('id')->on('categories')->onDelete('cascade'); // Self-referencing foreign key
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
