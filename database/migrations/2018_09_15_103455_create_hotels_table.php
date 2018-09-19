<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('hotel_name');
            $table->string('owner_id');
            $table->string('registration_no');
            $table->string('city');
            $table->string('no_of_rooms_single');
            $table->string('no_of_rooms_double');
            $table->integer('no_of_rooms_available_single');
            $table->integer('no_of_rooms_available_double');
            $table->integer('price_per_room_single');
            $table->integer('price_per_room_double');
            $table->integer('price_with_meal_single');
            $table->integer('price_with_meal_double');
            $table->rememberToken();
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
        Schema::dropIfExists('hotels');
    }
}
