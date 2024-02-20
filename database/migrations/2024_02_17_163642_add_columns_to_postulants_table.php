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
        Schema::table('postulants', function (Blueprint $table) {
            $table->string('education_status')->nullable();
            $table->string('antiquity1')->nullable();
            $table->string('finish_year1')->nullable();
            $table->string('antiquity2')->nullable();
            $table->string('finish_year2')->nullable();
            $table->string('antiquity3')->nullable();
            $table->string('finish_year3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('postulants', function (Blueprint $table) {
            //
        });
    }
};
