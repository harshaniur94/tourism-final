@extends('layouts.basic')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
@section('content')

<h1>Arrange your transport</h1>
<div class="container" >
@if(count($transport) > 0)
    @foreach($transport as $transport)
    <div class="row jumbotron text-center blue-grey lighten-5 ">
        <div class="col-md-4">
        <img src="storage/profile_image/{{$transport->profile_image}}" alt="" class="img-size">
        </div>
        <div class=" col-md-6" class="divdetails" style="margin-top:50px">
            <h3><a href="/boats/{{$transport->transportid}}">{{$transport->title}}</a></h3>
            
            <h5>Contact:<span class="fas fa-phone"></span>{{$transport->telephone}}</h5>
            <small>Reg No:{{$transport->registrationnumber}}</small>

        </div>
        <div class="col-md-2" class="padding" style="margin-top:50px">
            <button class="btn btn-info">RESERVE RIDE</button>
            
        </div>
    </div>
   
    @endforeach
    
@else


@endif

</div>
@endsection()

<style>
    .img-size{
        height:200px;
        width:300px;
    }
    .divdetails{
        margin-top:200px;
    }
</style>