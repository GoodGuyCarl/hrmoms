<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('spouseInformation', function (Blueprint $table) {
            $table->id();
            $table->integer('datasheet_id');
            $table->string('surname');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('suffix');
            $table->string('occupation');
            $table->string('employer_business_name');
            $table->string('business_address');
            $table->string('contact_no');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('spouseInformation');
    }

};
