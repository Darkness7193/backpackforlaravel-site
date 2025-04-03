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
        Schema::create('accordion_texts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('accordion', 100)->default('main_page');
            $table->string('title', 100);
            $table->string('text', 1000);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accordion_texts');
    }
};
