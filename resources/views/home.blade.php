@extends('master')

@section('title', 'Home')

@section('content')
<div class="row">
  <div class="col-md-8 w-100">
    <h3 >Meet the members of Group 16:</h3>
    <div class="card mb-3"> 
      <div class="card-body w-100">
     
        <img class="d-block mx-auto rounded-circle" src="{{ asset('images/SYAHMI.jpg') }}" alt="Syahmi Photo"  width="200">

        <p class="text-center">Muhammad Syahmi Solihin Bin Mustafa <br></p>
        <p class="text-center">CB20086</p>
       
      </div>
      
    </div>
  </div>
<div class="col-md-8 w-100">
  <div class="card mb-3 w-100">
        <div class="card-body">
          <img class="d-block mx-auto rounded-circle" src="{{ asset('images/SYAHMI.jpg') }}" alt="Syahmi Photo"  width="200">
          <p class="text-center">Muhammad Fawwaz</p>

        </div>

      </div>
    </div>
    </div>

  
</div>
@endsection
