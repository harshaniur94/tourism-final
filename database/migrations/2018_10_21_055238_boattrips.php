<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Boattrips extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('boattrips', function (Blueprint $table) {
            
            $table->increments('reservationid');
            $table->string('boatid');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('location');
            $table->string('availableseats');
            $table->string('reservedseats');
            $table->string('startingtime');
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
        //
    }
}
