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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('name');
            $table->string('slug')->unique();
            $table->json('image'); // Store multiple image names in JSON format
            $table->text('description');
            $table->longText('content');
            $table->unsignedTinyInteger('rating')->nullable(); // Rating from 1 to 5
            $table->unsignedInteger('position')->default(0); // Used for sorting order
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
