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
        if (!Schema::hasTable('banner')) {
            Schema::create('banner', function (Blueprint $table) {
                $table->charset = 'utf8';
                $table->collation = 'utf8_general_ci';
                $table->id();
                $table->string('image')->nullable();
                $table->string('title')->nullable();
                $table->string('alt')->nullable();
                $table->string('url')->nullable();
                $table->boolean('status');
                $table->string('upload_by')->nullable();
                $table->integer('modified_by')->nullable();
                $table->dateTime('deleted_at')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banner');
    }
};
