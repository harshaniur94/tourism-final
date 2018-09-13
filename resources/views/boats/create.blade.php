@extends('layouts.app')
@section('content')
<div>
<h3>PLEASE FILL THE FOLLOWING DETAILS</h3>
    <div class="container" style="margin-top:100px">

     <div class="row">
         <div class="col-md-2">

         </div>
         <div class="col-md-8 ">
            <h3 class="font4">BOAT REGISTRATION</h3>
                
            {!! Form::open(['action'=> 'BoatsController@store','method'=>'POST' ,'class'=>' ']) !!}
            <div class="form-group">
                
                {{FORM::text('name','',['class'=>'form-control','placeholder'=>'name'])}}
                 <br>
                 {{FORM::text('email','',['class'=>'form-control','placeholder'=>'email'])}}
                 <br>
                 {{FORM::text('password','',['class'=>'form-control','placeholder'=>'password'])}}
                <br>
               
                {{FORM::text('title','',['class'=>'form-control','placeholder'=>'title of the boat'])}}
                <br>
           
                {{FORM::text('availableseats','',['class'=>'form-control','placeholder'=>'No of seats available'])}}
                <br>
                
                {{FORM::text('priceperhead','',['class'=>'form-control','placeholder'=>'price per head'])}}
                <br>
                
                {{FORM::text('registrationnumber','',['class'=>'form-control','placeholder'=>'government registration number'])}}
                <br>
            
                {{FORM::textarea('body','',['class'=>'form-control','placeholder'=>'write a message to your customers'])}}
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