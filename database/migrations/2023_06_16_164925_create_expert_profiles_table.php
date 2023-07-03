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
            $table->string('location')->nullable();
            $table->enum('status', ['approved', 'pending', 'rejected'])->default('pending');
            $table->longText('details');
            $table->string('birthday')->nullable();
            $table->string('sex')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('nationality')->nullable();
            $table->string('language')->nullable();
            $table->string('image')->nullable();
            $table->string('company')->nullable();
            $table->string('work_duration')->nullable();
            $table->string('certification')->nullable();
            $table->string('certification_date')->nullable();
            $table->string('certification_image')->nullable();
            $table->string('position')->nullable();
            $table->string('phone_number')->nullable();
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
