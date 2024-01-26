<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('trainings__attended', function (Blueprint $table) {
            $table->id();
            $table->integer('datasheet_id');
            $table->string('title');
            $table->date('date_from');
            $table->date('date_to');
            $table->string('number_of_hours');
            $table->string('type_of_ld');
            $table->string('conducted_sponsored_by');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('trainings__attended');
    }
};
