<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Boats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('boats', function (Blueprint $table){
        $table->increments('boatid');
        $table->string('boatname');
        $table->string('ownerid');
        $table->string('availableseats');
        $table->string('receivedseats');
        $table->string('priceperhead');
        $table->string('registrationnumber');
        $table->string('pone');
        $table->string('ptwo');
        $table->string('pthree');
        $table->string('reservationdate');
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
