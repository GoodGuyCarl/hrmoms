<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('other__information', function (Blueprint $table) {
            $table->id();
            $table->integer('datasheet_id');
            $table->integer('question_id');
            $table->string('special_skills_hobbies');
            $table->string('non_academic_distinctions_recognitions');
            $table->string('membership_in_association_organization');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('other__information');
    }
};
