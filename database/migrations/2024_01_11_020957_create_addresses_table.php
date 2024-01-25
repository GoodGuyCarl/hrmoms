<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->integer('datasheet_id');
            $table->enum('type', ['residential', 'permanent']);
            $table->string('house_block_lot_no');
            $table->string('street');
            $table->string('subdivision_village');
            $table->string('barangay');
            $table->string('city_municipality');
            $table->string('province');
            $table->string('zip_code');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }

};
