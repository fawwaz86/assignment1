@extends('master')

@section('title', 'Home')

@section('content')
<div class="row">
  <div class="col-md-8">
    <h1>Meet the members of Group 16:</h1>
    <div class="card mb-3"> 
      <div class="card-body">
     
        <img src="DSC02456.jpg" alt="syahmi">
        <p>Muhammad Syahmi Solihin Bin Mustafa</p>
        <p>CB20086</p>
       
      </div>
      
    </div>
  </div>

  <div class="card mb-3">
        <div class="card-body">
          <img sr="" alt="fawwaz">
          <p>Muhammad Fawwaz</p>

        </div>

      </div>

  <div class="col-md-4">
    <div class="card text-center">
      <div class="card-body">
        <!-- optional profile image: place img in public/images or use placeholder -->
        <img src="https://via.placeholder.com/150" class="rounded-circle mb-3" alt="profile">
        <h5 class="card-title">Contact</h5>
        <p class="card-text">Email: youremail@example.com</p>
        <a href="{{ route('contact') }}" class="btn btn-outline-secondary">Send Message</a>
      </div>
    </div>
  </div>
</div>
@endsection
