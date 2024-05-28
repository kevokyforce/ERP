<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });

        DB::table('roles')->insert([
            [
                'id' => 1,
                'title' => 'Super Admin'
            ],
            [
                'id' => 2,
                'title' => 'Admin'
            ],
            [
                'id' => 3,
                'title' => 'Client'
            ],
            [
                'id' => 4,
                'title' => 'Supplier'
            ],
            [
                'id' => 5,
                'title' => 'Employee'
            ],
        ]);

        DB::table('users')->insert([
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'email' => (env('DEFAULT_EMAIL')),
            'password' => Hash::make(env('DEFAULT_PASSWORD')),
            'role_id' => '1',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
