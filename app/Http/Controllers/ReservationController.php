<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use validator;
use Calendar;
use App\boats;
use App\trips;

class ReservationController extends Controller
{
    public function index(){
       return $events=trips::get();
    }
}
