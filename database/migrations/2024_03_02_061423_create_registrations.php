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
        Schema::create('registrations', function (Blueprint $table) {
            Schema::create('project', function (Blueprint $table) {
     $table->id();
     $table->string('name',255);
     $table->string('email',255);
     $table->date('dob');
     $table->string('fathers_name',255);
     $table->string('mothers_name',255);
     $table->string('gender',255);
     $table->string('country',255);
     $table->string('city',255);
     $table->timestamps();
 });

 });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
