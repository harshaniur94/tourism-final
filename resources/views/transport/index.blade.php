@extends('layouts.basic')
@section('content')

<h1>boats</h1>
<div class="container" >
@if(count($boats) > 0)
    @foreach($boats as $boats)
    <div class="row jumbotron text-center blue-grey lighten-5 ">
        <div class=" col-md-6">
            <h3><a href="/boats/{{$boats->boatid}}">{{$boats->boatname}}</a></h3>
            <h6>{{$boats->boatid}}</h6>
            <small>{{$boats->	registrationnumber	}}</small>

        </div>
        <div class="col-md-6">
            <button class="btn btn-info">RESERVE RIDE</button>
            <button class="btn btn-success">VIEw DETAILS</button>
            <button class="btn btn-danger">CONTACT US</button>
        </div>
    </div>
   
    @endforeach
    
@else


@endif

</div>
@endsection()