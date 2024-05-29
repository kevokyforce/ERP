<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('suppliers_details', function (Blueprint $table) {
            $table->id();
            $table->foreignID('user_id');   
            $table->string('phone_number');
            $table->string('address');
            $table->enum('membership_status', ['VIP', 'Active', 'Limited', 'Suspended']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers_details');
    }
};
