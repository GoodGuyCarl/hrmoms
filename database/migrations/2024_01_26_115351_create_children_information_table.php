<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('children__information', function (Blueprint $table) {
            $table->id();
            $table->integer('datasheet_id');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('surname');
            $table->string('suffix');
            $table->date('birthdate');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('children__information');
    }
};
