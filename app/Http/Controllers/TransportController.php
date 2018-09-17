<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transport;

class TransportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transport = transport::all();
       
        return view('transport.index')->with('transport', $transport);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transport.create');
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
         


            
            
          
        ]);

        if($request->hasfile('cover_image')){
            //get file name with the extension
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();

            //get just file name
            $filename =pathinfo( $fileNameWithExt,PATHINFO_FILENAME);

            //get only thhe extension

            $ext=$request->file('cover_image')->getClientOriginalExtension();

            //$filename to store
            $fileNameToStore=$filename.'_'.time().'.'.$ext;
            //upload image
            $path = $request->file('cover_image')->storeAS('public/cover_images', $fileNameToStore);
// harshajithhimath@gmail.com
        }
        else{
            $fileNameToStore ="noimage.jpg";
        }

        if($request->hasfile('profile_image')){
            //get file name with the extension
            $fileNameWithExtp = $request->file('profile_image')->getClientOriginalName();

            //get just file name
            $filenamep =pathinfo( $fileNameWithExtp,PATHINFO_FILENAME);

            //get only thhe extension

            $extp=$request->file('profile_image')->getClientOriginalExtension();

            //$filename to store
            $fileNameToStorep=$filename.'_'.time().'.'.$ext;
            //upload image
            $pathp = $request->file('profile_image')->storeAS('public/profile_image', $fileNameToStore);

        }
        else{
            $fileNameToStore ="noimagep.jpg";
        }
        $transport = new transport;
        $transport->title =$request->input('title');
        $transport->availableseats =$request->input('availableseats');
     
$transport->registrationnumber =$request->input('registrationnumber');
$transport->body =$request->input('body');
$transport->telephone =$request->input('telephone');
$transport->priceperday =$request->input('priceperday');
$transport->cover_image =$fileNameToStore;
$transport->profile_image = $fileNameToStorep;
      
       
        
       
$transport->ownerid = auth()->user()->id;

$transport->save();

        return redirect('/transport')->with('success','post created');


    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
