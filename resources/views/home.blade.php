@extends('master')

@section('title', 'Home')

@section('content')
<div class="row justify-content-center">

<h1>NIGGGERRR BESAR</h1>

  {{-- Page Heading --}}
  <div class="col-12 mb-4">
    <h3 class="text-center">Meet the members of Group 16:</h3>
  </div>

  {{-- Member 1 --}}
  <div class="col-md-6 mb-3 d-flex">
    <div class="card h-100 w-100">
      <div class="card-body text-center">
        <img class="d-block mx-auto rounded-circle" src="{{ asset('images/SYAHMI.jpg') }}" alt="Syahmi Photo" width="200">
        <p class="mt-3">Muhammad Syahmi Solihin Bin Mustafa <br>CB20086</p>
      </div>
    </div>
  </div>

  {{-- Member 2 --}}
  <div class="col-md-6 mb-3 d-flex">
    <div class="card h-100 w-100">
      <div class="card-body text-center">
        <img class="d-block mx-auto rounded-circle" src="{{ asset('images/fawwaz.jpg') }}" alt="fawwaz Photo" width="200">
        <p class="mt-3">Mohamad Fawwaz Hatmi Bin Mohd Faudzan <br>CB21073</p>
      </div>
    </div>
  </div>

</div>
@endsection
