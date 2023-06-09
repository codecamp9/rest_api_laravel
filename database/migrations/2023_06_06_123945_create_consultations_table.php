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
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('society_id')->unsigned();
            $table->bigInteger('medical_id')->unsigned();
            $table->enum('status', ['accepted', 'declined', 'pending']);
            $table->text('disease_history');
            $table->text('current_symptoms');
            $table->text('doctor_notes')->nullable(true)->default(null);
            $table->timestamps();

            $table->foreign('society_id')->references('id')->on('societies');
            $table->foreign('medical_id')->references('id')->on('medicals');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultations');
    }
};