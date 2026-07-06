<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('event_id_code')->unique();
            $table->string('event_token')->unique();
            $table->string('name');
            $table->string('category')->nullable();
            $table->date('start_date')->nullable();
            $table->date('d_day')->nullable();
            $table->string('location')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->bigInteger('target_audience')->nullable();
            $table->decimal('estimated_budget', 15, 2)->nullable();
            $table->text('description')->nullable();
            $table->string('logo_path')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
