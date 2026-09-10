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
        Schema::create('levelings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('character_id')->constrained('characters');
            $table->timestamp('leveled_up_at')->nullable();
            $table->unsignedSmallInteger('to_level');
            $table->unsignedSmallInteger('health_points');
            $table->unsignedSmallInteger('faith_points');
            $table->unsignedSmallInteger('skill_points');
            $table->unsignedSmallInteger('community_points');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('levelings');
    }
};
