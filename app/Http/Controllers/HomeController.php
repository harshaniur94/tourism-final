<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transport;
use App\boats;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
      
        $usertype=auth()->user()->usertype;
        
        
        if( $usertype=='boat owner'){
            $name=auth()->user()->id;
         $boats = Boats::where('user_id',$name)->first();
         if($boats==null){
            return view('boats.create');

         }
         else{
            
            return view('home')->with('home',$boats);
         }
            
        }
        
        
        if($usertype=='transport provider'){
            
            $name=auth()->user()->id;
            
             $transport = Transport::where('ownerid',$name)->first();
            if($transport==null){
                return view('transport.create'); 

            }
            else{
              
                return view('transport')->with('transport',$transport);
            }
                
                
               
           
           
        }
          
        
    }


     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $boats = boats::all();
       
        return view('boats.edit')->with('boats', $boats);
    }

}
