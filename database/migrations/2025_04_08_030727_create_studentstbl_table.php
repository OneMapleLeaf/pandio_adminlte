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
        Schema::create('studentstbl', function (Blueprint $table) {
            $table->string('stud_no');
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('stud_add');
            $table->string('stud_DOB');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studentstbl');
    }
};
