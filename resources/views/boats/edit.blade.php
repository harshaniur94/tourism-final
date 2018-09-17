@extends('layouts.basic')
@section('content')
<div>
<h3>EDIT POST</h3>
    <div class="container" style="margin-top:100px">

     <div class="row">
         <div class="col-md-2">

         </div>
         <div class="col-md-8 ">
            <h3 class="font4">BOAT REGISTRATION</h3>
                
            {!! Form::open(['action'=> ['BoatsController@update',$boats->boatid],'method'=>'POST' ,'class'=>' ']) !!}
            <div class="form-group">
                
                
                 {{FORM::hidden('email','',['class'=>'form-control','placeholder'=>'email'])}}
                 <br>
                 {{FORM::hidden('password','',['class'=>'form-control','placeholder'=>'password'])}}
                <br>
               <label for="">Title of the boat</label>
                {{FORM::text('title',$boats->boatname,['class'=>'form-control',])}}
                <br>
                <label for="">Number of seats Available</label>
                {{FORM::text('availableseats',$boats->availableseats,['class'=>'form-control',])}}
                <br>
                <label for="">Price per head</label>
                {{FORM::text('priceperhead',$boats->priceperhead,['class'=>'form-control',])}}
                <br>
                <label for="">goverbment registration number</label>
                {{FORM::text('registrationnumber',$boats->registrationnumber,['class'=>'form-control',])}}
                <br>
                <label for="">write a message to your customers</label>
                {{FORM::textarea('body',$boats->body,['class'=>'form-control',])}}
                {{Form::hidden('_method','PUT')}}
                <br>
                <div class="container">
                        {{FORM::submit('submit',['class'=>'btn btn-primary btn-lg'])}}
                        {{FORM::Reset('reset',['class'=>'btn btn-danger btn-lg'])}}
                </div>
               
                {!! Form::close() !!}
            </div>
            </div>
            <div class="col-md-2">

            </div>
             
    </div>   
   
    </div>
</div>


<div>
    <!-- Material form register -->

@endsection()