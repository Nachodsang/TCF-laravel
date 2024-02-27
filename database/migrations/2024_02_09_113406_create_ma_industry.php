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
        if (!Schema::hasTable('ma_industry')) {
            Schema::create('ma_industry', function (Blueprint $table) {
                $table->charset = 'utf8';
                $table->collation = 'utf8_general_ci';
                $table->id()->autoIncrement();
                $table->integer('sort')->nullable();
                $table->tinyInteger('status')->nullable();
                $table->string('name')->nullable();
                $table->string('icon')->nullable();
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
        Schema::dropIfExists('ma_industry');
    }
};
