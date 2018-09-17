@extends('layouts.basic')
@section('content')
<div>
<h3>PLEASE FILL THE FOLLOWING DETAILS</h3>
    <div class="container" style="margin-top:100px">

     <div class="row">
         <div class="col-md-2">

         </div>
         <div class="col-md-8 ">
            <h3 class="font4">TRANSPORT VEHICLE REGISTRATION</h3>
                
            {!! Form::open(['action'=> 'TransportController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
            <div class="form-group">
                
      
               
                {{FORM::text('title','',['class'=>'form-control','placeholder'=>'title to display'])}}
                <br>
           
                {{FORM::text('availableseats','',['class'=>'form-control','placeholder'=>'No of seats available'])}}
                <br>
                
                {{FORM::text('priceperday','',['class'=>'form-control','placeholder'=>'price per head'])}}
                <br>
                
                {{FORM::text('registrationnumber','',['class'=>'form-control','placeholder'=>'government registration number'])}}
                <br>
                
               
                {{FORM::textarea('body','',['class'=>'form-control','placeholder'=>'write a message to your customers'])}}
                <br>
                {{FORM::textarea('telephone','',['class'=>'form-control','placeholder'=>'telephone'])}}
                <br>

                <div class="form-group">
                    <label for="">CHOOSE COVER PHOTO FOR YOUR PROFILE</label>
                    <br>
                    {{FORM::file('cover_image')}}
                </div>
                <div class="form-group">
                    <label for="">CHOOSE PROFILE PHOTO FOR YOUR PROFILE</label>
                    <br>
                    {{FORM::file('profile_image')}}
                </div>
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