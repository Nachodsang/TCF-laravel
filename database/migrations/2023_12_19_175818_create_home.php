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
        if (!Schema::hasTable('home')) {

            Schema::create('home', function (Blueprint $table) {
                $table->charset = 'utf8';
                $table->collation = 'utf8_general_ci';
                $table->id()->autoIncrement();
                $table->text('detail')->nullable();
                $table->string('type')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home');
    }
};
