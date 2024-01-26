<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('educational__backgrounds', function (Blueprint $table) {
            $table->id();
            $table->integer('datasheet_id');
            $table->enum('level', ['elementary', 'secondary', 'vocational', 'college', 'graduate_studies']);
            $table->string('school_name');
            $table->string('course');
            $table->date('date_from');
            $table->date('date_to');
            $table->string('highest_level_attained');
            $table->string('year_graduated');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('educational__backgrounds');
    }
};
