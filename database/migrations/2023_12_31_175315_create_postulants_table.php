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
        Schema::create('postulants', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable();
            $table->string('last_name_father', 255)->nullable();
            $table->string('last_name_mother', 255)->nullable();
            $table->string('cellphone')->nullable();
            $table->datetime('birthday')->nullable();
            $table->string('street')->nullable();
            $table->string('street_number')->nullable();
            $table->string('colony')->nullable();
            $table->string('zip')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('genre')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('economic_dependents')->nullable();
            $table->bigInteger('education_level_id')->nullable();
            $table->datetime('education_level_finish')->nullable();
            $table->string('first_work')->default('SI');
            $table->string('fiscal_situation')->default('NO');
            $table->string('position1')->nullable();
            $table->string('company1')->nullable();
            $table->datetime('init_date1')->nullable();
            $table->datetime('finish_date1')->nullable();
            $table->string('specialty1')->nullable();
            $table->string('position2')->nullable();
            $table->string('company2')->nullable();
            $table->datetime('init_date2')->nullable();
            $table->datetime('finish_date2')->nullable();
            $table->string('specialty2')->nullable();
            $table->string('position3')->nullable();
            $table->string('company3')->nullable();
            $table->datetime('init_date3')->nullable();
            $table->datetime('finish_date3')->nullable();
            $table->string('specialty3')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postulants');
    }
};
