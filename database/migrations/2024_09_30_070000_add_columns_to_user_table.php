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
        Schema::table('users', function (Blueprint $table) {
            $table->string('last_name')->nullable()->after('name');
            $table->string('gender')->nullable()->after('photo');
            $table->integer('state_id')->nullable()->after('gender');
            $table->integer('municipality_id')->nullable()->after('state_id');
            $table->string('position')->nullable();
            $table->string('job_area')->nullable();
            $table->integer('company_id')->nullable();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('last_name');
            $table->dropColumn('position');
            $table->dropColumn('job_area');
            $table->dropColumn('company_id');
            $table->dropColumn('gender');
            $table->dropColumn('state_id');
            $table->dropColumn('municipality_id');
        });
    }
};
