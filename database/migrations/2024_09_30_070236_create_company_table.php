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
        Schema::create('company', function (Blueprint $table) {
            $table->id();
            $table->string('trade_name')->nullable();
            $table->string('rfc', 15)->nullable();
            $table->string('legal_name')->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('company_mail', 50)->nullable();
            $table->integer('naics_code')->nullable();
            $table->integer('number_employees')->nullable();
            $table->string('seniority')->nullable();
            $table->string('sector')->nullable();
            $table->text('products_services')->nullable();
            $table->string('street')->nullable();
            $table->integer('number')->nullable();
            $table->integer('postal_code')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('incorporated_united_states')->nullable();
            $table->string('company_name')->nullable();
            $table->string('business_line')->nullable();
            $table->string('company_linkedin')->nullable();
            $table->string('company_website')->nullable();
            $table->string('company_social_net')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company');
    }
};
