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
        if (!Schema::hasTable('consultant')) {
            Schema::create('consultant', function (Blueprint $table) {
                $table->charset = 'utf8';
                $table->collation = 'utf8_general_ci';
                $table->id();
                $table->integer('sort')->nullable();
                $table->string('url')->nullable();
                $table->text('image')->nullable();
                $table->string('name')->nullable();
                $table->string('description')->nullable();
                $table->text('detail')->nullable();
                $table->integer('upload_by')->nullable();
                $table->integer('modified_by')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultant');
    }
};
