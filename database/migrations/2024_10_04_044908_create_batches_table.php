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
        Schema::create('batches', function (Blueprint $table) {
            $table->id();
            $table->string('name', 400);
            $table->date('start_date')->nullable();
            $table->date('primary_fermentation')->nullable();
            $table->date('secondary_fermentation')->nullable();
            $table->date('aging')->nullable();
            $table->longText('notes')->nullable();
            $table->float('abv')->nullable();
            $table->float('sg')->nullable();
            $table->float('brix')->nullable();
            $table->float('baume')->nullable();
            $table->float('abw')->nullable();
            $table->string('label')->nullable();
            $table->string('tags')->nullable();
            $table->enum('status', ["pending","successful","failed","primary_fermentation","secondary_fermentation","aging"]);
            $table->foreignId('user_id');
            $table->foreignId('recipe_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('batches');
    }
};
