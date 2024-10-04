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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 400);
            $table->longText('notes')->nullable();
            $table->float('target_gravity')->nullable();
            $table->float('target_volume')->nullable();
            $table->string('rating')->nullable();
            $table->boolean('sharable')->default(true);
            $table->string('creator_id');
            $table->string('owner_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
