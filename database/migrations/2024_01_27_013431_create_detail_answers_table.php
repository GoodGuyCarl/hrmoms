<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('detail__answers', function (Blueprint $table) {
            $table->id();
            $table->integer('datasheet_id');
            $table->integer('question_id');
            $table->integer('choice_id');
            $table->integer('detail_id');
            $table->string('value');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('detail__answers');
    }
};
