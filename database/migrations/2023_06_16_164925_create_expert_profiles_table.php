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
        Schema::create('expert_profiles', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('location');
            $table->string('status');
            $table->longText('details');
            $table->string('birthday');
            $table->string('sex');
            $table->string('birth_place');
            $table->string('nationality');
            $table->string('language');
            $table->string('image');
            $table->string('company');
            $table->string('work_duration');
            $table->string('certification')->nullable();
            $table->string('certification_date')->nullable();
            $table->string('certification_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expert_profiles');
    }
};
