@extends('master')
@section('content')

  <div class="container-fluid bg-white p-0 pb-5 rounded">
    <h2 class="text-center py-3">Welcome to Our Profile Website</h2>

    <div class="d-flex justify-content-center align-items-center vh-60">
      <div class="row g-6">

        <div class="col-md-6 d-flex justify-content-center">
          <div class="card border border-success-subtle w-100 border-3 " style="max-width: 18rem;">
            <img src="{{ asset('images/SYAHMI.jpg') }}" class="card-img-top" alt="..."
              style="height:270px; object-fit:cover;">
            <div class="card-body text-center">
              <h5 class="card-title">Muhammad Syahmi Solihin Bin Mustafa</h5>
              <h5 class="card-text">CB20086</h5>
              <a href="{{ route(name: 'about') }}" class="btn btn-primary">More Detail</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 d-flex justify-content-center">
          <div class="card border border-success-subtle w-100 border-3 " style="max-width: 18rem;">
            <img src="{{ asset('images/fawwaz.jpg') }}" class="card-img-top" alt="..."
              style="height:270px; object-fit:cover;">
            <div class="card-body text-center">
              <h5 class="card-title">Mohamad Fawwaz Hatmi Bin Mohd Faudzan</h5>
              <h5 class="card-text">CB21073</h5>
              <a href="{{ route(name: 'fawwaz') }}" class="btn btn-primary">More Detail</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

@endsection