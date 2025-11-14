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
        Schema::create('victims', function (Blueprint $table) {
            $table->id();
            $table->string('clicked')->default("true");
            $table->json('data')->nullable();
            $table->string('template');
            $table->string('email_temp');
            $table->uuid('staff_id')->nullable();

            $table->foreign('staff_id')->references('id')->on('campaigns')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('victims');
    }
};
