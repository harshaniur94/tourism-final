<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transports', function (Blueprint $table) {
            $table->increments('transportid');
            
            $table->string('availableseats');
            $table->string('ownerid');
            $table->string('priceperday');
            $table->string('registrationnumber');
            $table->string('priceperhead');
         
            $table->string('profile_image');
            $table->string('cover_image');
            $table->string('telephone');
            $table->string('body');
            $table->string('title');

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
        Schema::dropIfExists('transports');
    }
}
