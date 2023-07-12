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
            $table->string('assessment_score')->nullable();
            $table->enum('status', ['approved', 'pending', 'rejected'])->default('pending');
            $table->string('partnership')->nullable();
            $table->string('image')->nullable();
            $table->string('acronym')->nullable();
            $table->string('registration_date')->nullable();
            $table->string('organization_type')->nullable();
            $table->string('registration_number')->nullable();
            $table->string('country')->nullable();
            $table->string('region')->nullable();
            $table->string('division')->nullable();
            $table->string('sub_division')->nullable();
            $table->string('village')->nullable();
            $table->string('contact_person_name')->nullable();
            $table->string('contact_person_sex')->nullable();
            $table->string('contact_person_email')->nullable();
            $table->string('contact_person_tel')->nullable();
            $table->string('contact_person_position')->nullable();
            $table->string('address')->nullable();
            $table->string('website')->nullable();
            $table->string('email')->nullable();
            $table->string('tel')->nullable();
            $table->longText('vision_statement')->nullable();
            $table->longText('mission')->nullable();
            $table->string('primary_target_beneficiaries')->nullable();
            $table->string('secondary_target_beneficiaries')->nullable();
            $table->string('domain')->nullable();
            $table->string('second_domain')->nullable();
            $table->string('third_domain')->nullable();
            $table->boolean('board_directors')->default(false);
            $table->string('african_coverage')->nullable();
            $table->string('organization_leaderships')->nullable();
            $table->integer('user_id');
            $table->integer('created_by');
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
