<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('voluntary__involvements', function (Blueprint $table) {
            $table->id();
            $table->integer('datasheet_id');
            $table->string('name_of_organization');
            $table->string('address_of_organization');
            $table->date('date_to');
            $table->date('date_from');
            $table->string('number_of_hours');
            $table->string('position_nature_of_work');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('voluntary__involvements');
    }
};
