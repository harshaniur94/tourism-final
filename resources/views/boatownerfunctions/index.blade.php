@extends('layouts.userprofileboat')
@section('content')
<div class="row" style="margin-top:100px;margin-left:-100px">
    
    
    <div class="col-md-12" >
            <table class="table" border="1">
                    <thead class="thead-dark">
                        <tr>
                            <th>NAME</th>
                            <th>Location</th>
                            <th>Number of seats</th>
                            <th>status</th>
                            <th>Reservation</th>
                            <th>Delete Boat</th>
                            
                        </tr>
                    </thead>
                   
                
                                           
            @foreach($boats as $boats) 
            <tbody>
                    <tr class="">
                             <td >{{$boats->name}}</td>
                            <td>{{$boats->location}}</td>
                            <td>{{$boats->noofinsuredpassengers}}</td>
                            <td>{{$boats->status}}</td>
                            <td><button class="btn btn-outline-danger btn-sm">Start Booking</button></td>
                            <td><button class="btn btn-outline-primary btn-sm">Delete boat</button></td>

                        </tr>
            </tbody>
           
            @endforeach
        </table>
    </div>
    
</div>

@endsection