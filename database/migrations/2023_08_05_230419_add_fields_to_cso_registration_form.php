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
        Schema::table('csos', function (Blueprint $table) {
            $table->boolean('office')->default(false);
            $table->string('staff')->nullable();
            $table->boolean('cnps_registered')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('csos', function (Blueprint $table) {
            Schema::dropIfExists('csos');
        });
    }
};
