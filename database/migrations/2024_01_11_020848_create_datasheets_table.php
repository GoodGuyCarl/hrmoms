<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('datasheets', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['pending', 'validated', 'approved'/* ,'rejected' */])->default('pending');
            $table->string('photo')->nullable();
            $table->string('surname');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('name_extension')->nullable();
            $table->string('birthdate');
            $table->string('birthplace');
            $table->string('sex');
            $table->string('civil_status');
            $table->string('height');
            $table->string('weight');
            $table->string('blood_type');
            $table->string('gsis_id_no');
            $table->string('pagibig_id_no');
            $table->string('philhealth_id_no');
            $table->string('sss_no');
            $table->string('tin_no');
            $table->string('agency_employee_no');
            $table->string('citizenship');
            $table->string('telephone_no');
            $table->string('mobile_no');
            $table->string('email_address');
            $table->timestamps();
        });
    }

    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    public function scopeValidated($query)
    {
        return $query->where('status', 'validated');
    }

    public function scopeApproved($query)
    {
        return $query->where('status', 'approved');
    }

    public function down(): void
    {
        Schema::dropIfExists('datasheets');
    }
};
