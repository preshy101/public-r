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
        Schema::create('membership_registers', function (Blueprint $table) {
            $table->id();
            $table->string('SNO');
            $table->string('LAST_NAME')->nullable();
            $table->string('FIRST_NAME')->nullable();
            $table->string('PHONE')->nullable();
            $table->string('EMAIL')->nullable();
            $table->string('GRADE')->nullable();
            $table->string('PRACTICE_ID')->nullable();
            $table->string('CHAPTER')->nullable();
            $table->string('INDUCTED')->nullable();
            $table->string('UPGRADED')->nullable();
            $table->string('ORGANIZATION')->nullable();
            $table->enum('Confirmed',['Yes', 'No'])->default('No');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membership_registers');
    }
};
