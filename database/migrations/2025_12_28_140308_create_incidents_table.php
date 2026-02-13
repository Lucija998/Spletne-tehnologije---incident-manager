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
        Schema::create('incidents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('type');
            $table->string('location');
            $table->enum('severity', ['nizka', 'srednja', 'visoka'])->default('srednja');
            $table->enum('status', ['nov', 'v obdelavi', 'rešen'])->default('nov');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('contact');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incidents');
    }
};
