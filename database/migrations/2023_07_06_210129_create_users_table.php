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
            $table->string('contact_name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('address');
            $table->string('business_name');
            $table->string('vat_number');
            $table->string('password');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->enum('type', ['user', 'admin'])->default('user');
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
