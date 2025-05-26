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
        Schema::create('admin_garages', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->integer('nic')->unique();
            $table->string('gender');
            $table->string('date_of_birth');
            $table->string('email');
            $table->integer('phone_number');
            $table->string('location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_garages');
    }
};
