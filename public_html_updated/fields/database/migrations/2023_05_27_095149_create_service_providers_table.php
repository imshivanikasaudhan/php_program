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
        Schema::create('service_providers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('image');
            $table->integer('phone')->unique();
            $table->integer('alternate_phone')->unique()->nullable();
            $table->string('pan')->unique();
            $table->string('aadhar')->unique();
            $table->string('father_name');
            $table->string('dob');
            $table->string('address');
            $table->string('nationality');
            $table->text('services')->nullable();
            $table->foreignId('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_providers');
    }
};
