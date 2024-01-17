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
        if (!Schema::hasTable('color')) {
            Schema::create('color', function (Blueprint $table) {
                $table->charset = 'utf8';
                $table->collation = 'utf8_general_ci';
                $table->id();
                $table->string('primary')->nullable();
                $table->string('secondary')->nullable();
                $table->string('info')->nullable();
                $table->string('light')->nullable();
                $table->string('dark')->nullable();
                $table->string('warning')->nullable();
                $table->string('danger')->nullable();
                $table->string('success')->nullable();
                $table->string('button_primary')->nullable();
                $table->string('button_secondary')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('color');
    }
};
