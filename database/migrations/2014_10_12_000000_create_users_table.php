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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('name')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('phone')->unique();
            $table->enum('role', ['admin', 'client'])->default('client');
            $table->string('image_url')->nullable();
            $table->string('adress')->nullable();;
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
