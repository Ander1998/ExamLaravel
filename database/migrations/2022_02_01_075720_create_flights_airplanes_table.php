<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsAirplanesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flightplane', function (Blueprint $table) {
            $table->id();
            $table->integer('flight_id');
            $table->integer('airplane_id');
            $table->foreign('flight_id')->references('id')->on('flights');
            $table->foreign('airplane_id')->references('id')->on('airplanes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flightplane');
    }
}
