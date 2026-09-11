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
        Schema::table('levelings', function (Blueprint $table) {
            $table->unsignedSmallInteger('area')->after('to_level')->comment('The area of the leveling: 0-General, 1-Cultural, 2-Faith, 3-Social, 4-Economical');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('levelings', function (Blueprint $table) {
            $table->dropColumn('area');
        });
    }
};
