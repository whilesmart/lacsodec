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
        Schema::create('csos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('assessment_score')->nullable();
            $table->enum('status', ['approved', 'pending', 'rejected'])->default('pending');
            $table->string('partnership')->nullable();
            $table->string('image')->nullable();
            $table->string('acronym')->nullable();
            $table->string('registration_date');
            $table->string('organization_type');
            $table->string('registration_number');
            $table->string('country');
            $table->string('region');
            $table->string('division');
            $table->string('sub_division');
            $table->string('village');
            $table->string('contact_person_name');
            $table->string('contact_person_sex');
            $table->string('contact_person_email');
            $table->string('contact_person_tel');
            $table->string('contact_person_position');
            $table->string('address');
            $table->string('website');
            $table->string('email');
            $table->string('tel');
            $table->longText('vision_statement');
            $table->longText('mission');
            $table->string('primary_target_beneficiaries');
            $table->string('secondary_target_beneficiaries');
            $table->string('domain');
            $table->boolean('board_directors')->default(false);
            $table->string('african_coverage');
            $table->string('organization_leaderships');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('csos');
    }
};
