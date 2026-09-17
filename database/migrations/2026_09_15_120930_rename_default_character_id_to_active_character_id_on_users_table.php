<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_active_character_id_foreign');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('active_character_id', 'active_character_id');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreign('active_character_id', 'users_active_character_id_foreign')
                ->references('id')->on('characters')
                ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_active_character_id_foreign');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('active_character_id', 'active_character_id');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreign('active_character_id', 'users_active_character_id_foreign')
                ->references('id')->on('characters')
                ->nullOnDelete();
        });
    }
};
