<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        if(!Schema::hasTable('service')) {
            Schema::create('service', function (Blueprint $table) {
                $table->charset = 'utf8';
                $table->collation = 'utf8_general_ci';
                $table->id();
                $table->string('image')->nullable();
                $table->string('image_title')->nullable();
                $table->string('image_alt')->nullable();
                $table->string('url')->nullable();
                $table->string('service')->nullable();
                $table->text('details')->nullable();
                $table->text('seo_description')->nullable();
                $table->text('seo_keyword')->nullable();
                $table->boolean('status');
                $table->string('upload_by')->nullable();
                $table->integer('modified_by')->nullable();
                $table->timestamps();
                $table->dateTime('deleted_at')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('service');
    }
};
