<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable('visitor_log')) {
            Schema::create('visitor_log', function (Blueprint $table) {
                $table->charset = 'utf8';
                $table->collation = 'utf8_general_ci';
                $table->id()->autoIncrement();
                $table->string('ip')->nullable();
                $table->string('city')->nullable();
                $table->string('country')->nullable();
                $table->timestamps();
                $table->timestamp('deleted_at')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitor_log');
    }
};
