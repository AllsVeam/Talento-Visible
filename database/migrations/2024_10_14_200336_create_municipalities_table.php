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
        Schema::create('municipalities', function (Blueprint $table) {
            $table->id();
            $table->string('cve_state', 4)->nullable()->collate('utf8mb4_unicode_ci');
            $table->string('municipality_name', 255)->nullable()->collate('utf8mb4_unicode_ci');
            $table->string('cve', 4)->nullable()->collate('utf8mb4_unicode_ci');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('municipalities');
    }
};