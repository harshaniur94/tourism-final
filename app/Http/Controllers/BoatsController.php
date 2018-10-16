<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\boats;

class BoatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $boats = boats::all();
       
        return view('boats.index')->with('boats', $boats);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('boats.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'fname'=>'required',
        'regno'=>'required',
        'btype'=>'required',
        'location'=>'required',
        'noofseats'=>'required',
        'tp'=>'required',
        'noofinsuredpassengers'=>'required',
        'insuarancecompany'=>'required',
        'insuaranceregno'=>'required',
        'bankaccno'=>'required',
        'bankname'=>'required',


            
            
          
       ]);

      $boats = new boats;
         $boats->name=$request->input('fname');
         $boats->governmentregno =$request->input('regno');
         $boats->boattype =$request->input('btype');
         $boats->location=$request->input('location');
         $boats->phonenumber =$request->input('tp');
         $boats->noofinsuredpassengers =$request->input('noofinsuredpassengers');
         $boats->insuarancecpmpanyname=$request->input('insuarancecompany');
         $boats->insuaranceregno=$request->input('insuaranceregno');
         $boats->bankacountnumber =$request->input('bankaccno');
         $boats->Nameofthebank=$request->input('bankname');
         $boats->noofseats =$request->input('noofseats');
         $boats->status="waiting";
         $boats->ownerid = auth()->user()->id;
         $boats->save();
         return redirect('/home')->with('success','post created');
     }
     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
         $boats = Boats::find($id);
         return view('userprof.boat')->with('home',$boats);
     }
     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
        
         $name=auth()->user()->id;
       $boats = Boats::where('user_id',$name)->first();
       
         return view('boats.edit')->with('boats', $boats);
     }
     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, $id)
     {
        
         $boats = boats::find($id);
         $boats->boatname =$request->input('title');
         $boats->availableseats =$request->input('availableseats');
         $boats->priceperhead =$request->input('priceperhead');
         $boats->registrationnumber =$request->input('registrationnumber');
         $boats->body =$request->input('body');
         $boats->receivedseats ='0';
      
       
         $boats->reservationdate ='4';
         $boats->start_time='9.00AM';
         $boats->status='0';
         $boats->user_id = auth()->user()->id;
         $boats->save();
         return redirect('/home')->with('success','post updated');

    }

    public function deleteboatview(){
        $id=auth()->user()->id;
        $fname=auth()->user()->fname;
        $lname=auth()->user()->lname;
        $email=auth()->user()->email;
        $boats = Boats::where('ownerid',$id)->get();
        return view('boatownerfunctions.boatdelete')->with('boats',$boats);

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $boats= boats::find($id);
       $boats->delete();
       return redirect('/deleteboat')->with('success','Boat removed');
    }
}
 