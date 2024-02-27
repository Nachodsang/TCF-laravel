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
        if (!Schema::hasTable('about_us')) {

            Schema::create('about_us', function (Blueprint $table) {
                $table->id()->autoIncrement();
                $table->longText('description_th')->nullable();
                $table->longText('description_en')->nullable();
                $table->longText('detail_th')->nullable();
                $table->longText('detail_en')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
