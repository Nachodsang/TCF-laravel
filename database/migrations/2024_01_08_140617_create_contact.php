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
        if (!Schema::hasTable('contact')) {
            Schema::create('contact', function (Blueprint $table) {
                $table->charset = 'utf8';
                $table->collation = 'utf8_general_ci';
                $table->id();
                $table->string('telephone')->nullable();
                $table->string('mobile')->nullable();
                $table->string('email')->nullable();
                $table->string('twitter')->nullable();
                $table->string('fb')->nullable();
                $table->string('ig')->nullable();
                $table->string('yt')->nullable();
                $table->timestamps();
            });
        };
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact');
    }
};
