<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Calendar;
use App\boats;
use APp\boattrips;

class TripController extends Controller
{
    public function index(){
        $id=auth()->user()->id;
        
        $boats = Boats::where('ownerid',$id)->get();
        return view('boatownerfunctions.startnewtrip')->with('boats', $boats);;
    }

    public function AddNewTrip(Request $reques){

        $validator=validator::make($request->all(),[
            'start_date'=>'required',
            'end_date'=>'required',
            'locatin'=>'required',
            'startingtime'=>'required',
            'availableseats'=>'required',
        ]);

        if($validator->fails()){
            \session::flash('warning','please fill the all required fields');
            return Redirect::to('/tripscreate')->withInput()->withErrors($validator);

            $trip=new trip;
            $trip->boatid=$request->input('boatid');
            $trip->start_date=$request->input('start_date');
            $trip->end_date=$request->input('end_date');
            $trip->location=$request->input('location');
            $trip->startingtime=$request->input('startingtime');
            $trip->availableseats=$request->input('availableseats');
            $trip->reservedseats=$request->input('reservedseats');
            
            
            
            

            
        }
    }
}
