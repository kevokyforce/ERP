<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('salary_types', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });

        DB::table('salary_types')->insert([
            ['title' => 'Hourly'],
            ['title' => 'Weekly'],
            ['title' => 'Monthly'],
            ['title' => 'Anually/Yearly'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salary_types');
    }
};
