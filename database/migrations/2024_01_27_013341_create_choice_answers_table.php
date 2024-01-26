<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('choice__answers', function (Blueprint $table) {
            $table->id();
            $table->integer('datasheet_id');
            $table->integer('question_id');
            $table->integer('choice_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('choice__answers');
    }
};
