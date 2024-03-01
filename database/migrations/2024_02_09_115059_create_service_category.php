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
        if (!Schema::hasTable('service_category')) {
            Schema::create('service_category', function (Blueprint $table) {
                $table->charset = 'utf8';
                $table->collation = 'utf8_general_ci';
                $table->id()->autoIncrement();
                $table->integer('sort')->nullable();
                $table->string('url')->nullable();
                $table->string('type')->nullable();
                $table->string('name')->nullable();
                $table->text('detail')->nullable();
                $table->string('description')->nullable();
                $table->string('icon')->nullable();
                $table->tinyInteger('status')->nullable();
                $table->integer('upload_by')->nullable();
                $table->timestamps();
                $table->integer('sort');
                $table->timestamp('deleted_at')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_category');
    }
};
