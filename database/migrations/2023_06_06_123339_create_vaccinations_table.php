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
        Schema::create('vaccinations', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('dose');
            $table->date('date');
            $table->bigInteger('society_id')->unsigned();
            $table->bigInteger('spot_id')->unsigned();
            $table->bigInteger('vaccine_id')->unsigned();
            $table->bigInteger('doctor_id')->unsigned();
            $table->bigInteger('officer_id')->unsigned();
            $table->timestamps();

            $table->foreign('society_id')->references('id')->on('societies');
            $table->foreign('spot_id')->references('id')->on('spots');
            $table->foreign('vaccine_id')->references('id')->on('vaccines');
            $table->foreign('doctor_id')->references('id')->on('medicals');
            $table->foreign('officer_id')->references('id')->on('medicals');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vaccinations');
    }
};