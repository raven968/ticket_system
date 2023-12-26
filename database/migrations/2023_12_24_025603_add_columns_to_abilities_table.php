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
        Schema::table('abilities', function (Blueprint $table) {
            $table->string('group')->nullable();
            $table->string('icon')->nullable();
            $table->string('route')->nullable();
            $table->text('description')->nullable();
            $table->boolean('is_listable')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('abilities', function (Blueprint $table) {
            //
        });
    }
};
