<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('work__experiences', function (Blueprint $table) {
            $table->id();
            $table->integer('datasheet_id');
            $table->string('position_title');
            $table->date('date_to');
            $table->date('date_from');
            $table->string('department_agency_company_office');
            $table->string('monthly_salary');
            $table->string('salary_job_pay_grade');
            $table->string('status_of_appointment');
            $table->boolean('government_service');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('work__experiences');
    }
};
