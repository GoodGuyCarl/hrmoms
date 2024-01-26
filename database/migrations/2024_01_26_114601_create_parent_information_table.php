<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('parent__information', function (Blueprint $table) {
            $table->id();
            $table->integer('datasheet_id');
            $table->enum('type', ['father', 'mother']);
            $table->string('surname');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('suffix');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('parent__information');
    }
};
