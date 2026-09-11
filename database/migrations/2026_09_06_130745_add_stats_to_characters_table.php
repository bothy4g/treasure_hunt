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
        Schema::table('characters', function (Blueprint $table) {
            $table->unsignedInteger('treasure_points')->default(0);
            $table->unsignedInteger('scripture_points')->default(0);
            $table->unsignedInteger('action_points')->default(0);
            $table->unsignedInteger('faith_points')->default(0);
            $table->unsignedInteger('health_points')->default(0);
            $table->unsignedInteger('community_points')->default(0);
            $table->unsignedInteger('skill_points')->default(0);
            $table->unsignedInteger('money')->default(0);
            $table->unsignedInteger('cultural_temptation_resistance')->default(0);
            $table->unsignedInteger('faith_temptation_resistance')->default(0);
            $table->unsignedInteger('social_temptation_resistance')->default(0);
            $table->unsignedInteger('economical_temptation_resistance')->default(0);
            $table->unsignedInteger('cultural_xp')->default(0);
            $table->unsignedInteger('faith_xp')->default(0);
            $table->unsignedInteger('social_xp')->default(0);
            $table->unsignedInteger('economical_xp')->default(0);
            $table->unsignedInteger('general_xp')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('characters', function (Blueprint $table) {
            $table->dropColumn([
                'treasure_points',
                'scripture_points',
                'action_points',
                'health_points',
                'community_points',
                'money',
                'cultural_temptation_resistance',
                'faith_temptation_resistance',
                'social_temptation_resistance',
                'economical_temptation_resistance',
                'cultural_xp',
                'faith_xp',
                'social_xp',
                'economical_xp',
                'general_xp',
            ]);
        });
    }
};
