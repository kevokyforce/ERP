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
        Schema::create('designations', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('slug')->nullable();
            $table->timestamps();
        });

        DB::table('designations')->insert([
            [
                'title' => 'Accountant',
                'slug' => 'accountant'
            ],
            [
                'title' => 'Manager',
                'slug' => 'manager'
            ],
            [
                'title' => 'Human Resource',
                'slug' => 'human-resource'
            ],
            [
                'title' => 'Marketing',
                'slug' => 'marketing'
            ],
            [
                'title' => 'Store Control',
                'slug' => 'store-control'
            ],
            [
                'title' => 'Security',
                'slug' => 'security'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('designations');
    }
};
