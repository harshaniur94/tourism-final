<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    //table name
    protected $table= 'boattrips';
    public $primaryKey= 'reservationid';
    //
    public $timestamps='true';
}
