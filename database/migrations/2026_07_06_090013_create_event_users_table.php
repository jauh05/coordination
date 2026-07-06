<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('event_users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('user_id')->constrained()->cascadeOnDelete();
            $table->foreignUuid('event_id')->constrained()->cascadeOnDelete();
            $table->foreignUuid('division_id')->nullable()->constrained()->nullOnDelete();
            
            $table->enum('role', ['owner', 'division_head', 'member'])->default('member');
            
            $table->string('officer_id')->nullable()->unique();
            $table->string('member_id')->nullable()->unique();
            
            $table->json('permissions')->nullable();
            
            $table->timestamps();
            
            $table->unique(['user_id', 'event_id']);
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('event_users');
    }
};
