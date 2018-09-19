<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;

class HotelController extends Controller
{
    public function RegisterHotel(Request $request){

        $table = new Hotel();
        
        
        $table->hotel_name                              =$request->input('hname');
        $table->registration_no                         =$request->input('regno');
        $table->owner_id                                =auth()->user()->id;
        $table->city                                    =$request->input('city');
        $table->no_of_rooms_single                      =$request->input('nosingle');
        $table->no_of_rooms_double                      =$request->input('nodouble');
        $table->no_of_rooms_available_single            =$request->input('availablesingle');
        $table->no_of_rooms_available_double            =$request->input('availabledouble');
        $table->price_per_room_single                   =$request->input('pricesingle');
        $table->price_per_room_double                   =$request->input('pricedouble');
        $table->price_with_meal_single                  =$request->input('mealsingle');
        $table->price_with_meal_double                  =$request->input('mealdouble');
    

        $table->save();
        return view('hotels');
    }
}
