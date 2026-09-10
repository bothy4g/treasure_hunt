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
            $table->unsignedTinyInteger('strength')->default(1);
            $table->unsignedTinyInteger('willpower')->default(1);
            $table->unsignedTinyInteger('perserverance')->default(1);
            $table->unsignedTinyInteger('intelligence')->default(1);
            $table->unsignedTinyInteger('dexterity')->default(1);
            $table->unsignedTinyInteger('socialization')->default(1);
            $table->unsignedTinyInteger('focus')->default(1);
            $table->unsignedTinyInteger('balance')->default(1);
            $table->timestamp('generated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('characters', function (Blueprint $table) {
            $table->dropColumn(['willpower', 'perserverance', 'intelligence', 'dexterity', 'socialization', 'focus', 'balance', 'generated_at']);
        });
    }
};
