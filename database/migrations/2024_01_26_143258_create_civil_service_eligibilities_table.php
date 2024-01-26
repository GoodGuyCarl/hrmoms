<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('civil__service__eligibilities', function (Blueprint $table) {
            $table->id();
            $table->integer('datasheet_id');
            $table->enum('type', ['career_service', 'RA1080_board_bar', 'RA1080_board_bar_under_special_laws', 'CES', 'CSEE_barangay_eligibility', 'driver_license']);
            $table->string('rating');
            $table->date('date_of_examination_or_conferment');
            $table->string('place_of_examination_or_conferment');
            $table->string('license_no');
            $table->date('date_of_validity');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('civil__service__eligibilities');
    }
};
