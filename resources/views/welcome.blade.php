@extends('layouts.basic')

@section('title')
    Hotel Registration form
@endsection

@section('content')


<div class="row" style="margin-top:150px">
    <div class="group col-md-2"></div>

<div class="group col-md-8">

<div style="background-color:#a0dcde;border: 15px solid #a0dcde;">
    

<!--form for hotel registration -->
<form method="post" action="{{ route('signup') }}">

  <b><u>Hotel Registration</u></b><br>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputHotelName">Hotel Name</label>
      <input type="text" class="form-control"  placeholder="Hotel Name" name="hname">
    </div>

  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputRegistrationNo">Registration No</label>
      <input type="text" class="form-control"  placeholder="Registration No" name="regno">
    </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control"  placeholder="City" name="city">
    </div>
  </div>

<!--single,double seperation-->

  <div class="row">
  <div class="group col-md-4"></div>
  <div class="group col-md-4">Single</div>
  <div class="group col-md-4">Double</div>
  </div>

<div class="form-row">
    <div class="form-group col-md-4">No Of Rooms</div>
    <div class="form-group col-md-4">
      
      <input type="number" class="form-control"  placeholder="No Of Rooms Single" name="nosingle">
    </div>
    <div class="form-group col-md-4">
      <input type="number" class="form-control"  placeholder="No Of Rooms Double" name="nodouble">
    </div>

</div>
<div class="form-row">
    <div class="form-group col-md-4">No Of Rooms Available</div>
    <div class="form-group col-md-4">
      
      <input type="number" class="form-control"  placeholder="Available Single" name="availablesingle">
    </div>
    <div class="form-group col-md-4">
      <input type="number" class="form-control"  placeholder="Available Double" name="availabledouble">
    </div>

</div>

  <div class="form-row">
  <div class="form-group col-md-4">Price Per Room</div>
    <div class="form-group col-md-4">
      <input type="number" min="1" step="any" class="form-control"  placeholder="Rs." name="pricesingle">
    </div>
    <div class="form-group col-md-4">
      <input type="number" min="1" step="any" class="form-control"  placeholder="Rs." name="pricedouble">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-4">Price With Meals</div>
    <div class="form-group col-md-4">
      <input type="number" min="1" step="any" class="form-control"  placeholder="Rs." name="mealsingle">
    </div>
    <div class="form-group col-md-4">
      <input type="number" min="1" step="any" class="form-control"  placeholder="Rs." name="mealdouble">
    </div>
  </div>
  
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign up</button>
  <button type="reset" class="btn btn-primary">Reset</button>

  {{csrf_field()}}
  
</form>

</div>
</div>
<div class="group col-md-2">      
</div>
</div>


@endsection