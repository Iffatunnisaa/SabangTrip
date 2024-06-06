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
        Schema::create('etiket', function (Blueprint $table) {
            $table->id()->autoIncrement()->primary();
            $table->string('nama');
            $table->string('destination');
            $table->date('date');
            $table->string('time');
            $table->string('occupant');
            $table->string('email');
            $table->string('status')->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etiket');
    }
};
