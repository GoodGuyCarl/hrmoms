<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->integer('datasheet_id');
            $table->integer('no');
            $table->boolean('is_laundrylist');
            $table->string('laundry_list_item');
            $table->string('description');
            $table->integer('type');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
