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
        Schema::table('divisions', function (Blueprint $table) {
            $table->integer('pos_x')->nullable();
            $table->integer('pos_y')->nullable();
        });

        Schema::table('event_users', function (Blueprint $table) {
            $table->integer('pos_x')->nullable();
            $table->integer('pos_y')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('organization_tables', function (Blueprint $table) {
            //
        });
    }
};
