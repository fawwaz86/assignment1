@extends('master')

@section('title', 'Syahmi')
@section('content')
<div class="row justify-content-center">
   <div class="col-md-8">
    
    <div class="card mb-3"> 
      <div class="card-body w-100">
        <h1>Personal Details</h1>
     
        <img class="d-block mx-auto rounded-circle" src="{{ asset('images/SYAHMI.jpg') }}" alt="Syahmi Photo"  width="200">

        <p class="text-center">Muhammad Syahmi Solihin Bin Mustafa <br></p>
        <p class="text-center">CB20086</p>
        <p class="text-center">No.42 Lorong Pauh Jaya 2/1, Taman Pauh Jaya, 13700 Perai, Pulau Pinang</p>

       
      </div>
      
    </div>
    <div class="col-md-8 w-100 ">
        <div class="card mb-3 ">
            <h1>Education</h1>
            <table class="table">
  <thead>
    <tr>
      <th>No</th>
      <th>Institution's Name</th>
      <th>Year</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Sekolah Kebangsaan Pauh Jaya</td>
      <td>2013</td>
      
    </tr>
    <tr>
      <td>2</td>
      <td>SMA Maahad Al-Mashoor Al-Islami</td>
      <td>2018</td>
      
    </tr>

    <tr>
      <td>3</td>
      <td>Kolej Matrikulasi Pulau Pinang</td>
      <td>2020</td>
      
    </tr>

    <tr>
      <td>4</td>
      <td>Universiti Malaysia Pahang Al-Sultan Abdullah</td>
      <td>2026</td>
      
    </tr>

  </tbody>
</table>

        </div>

    </div>
    <div class="col-md-8 w-100">
        <div class="card mb-3">
            <h1>Skills</h1>
            <table class="table">
        <thead>
     <tr>
      <th>No</th>
      <th>Skills</th>
      
        </tr>
   
    
     </thead>
     <tbody>
        <tr>
      <td>1</td>
      <td>Java</td>
      
     </tr>
     <tr>
      <td>2</td>
      <td>HTML, CSS, JAVASCRIPT</td>
     
     </tr>
     <tr>
      <td>3</td>
      <td>Flutter</td>
     
        </tr>
        <tr>
      <td>4</td>
      <td>Laravel, bootstrap</td>
     
        </tr>
        </tbody>
        </table>

        </div>

        </div>
         <div class="col-md-8 w-100">
        <div class="card mb-3">
            <h1>Hobbies</h1>
            <table class="table">
        <thead>
     <tr>
      <th>No</th>
      <th>Hobby</th>
      
        </tr>
   
    
     </thead>
     <tbody>
        <tr>
      <td>1</td>
      <td>Playing soccer</td>
      
     </tr>
     <tr>
      <td>2</td>
      <td>Reading</td>
     
     </tr>
     <tr>
      <td>3</td>
      <td>Swimming</td>
     
        </tr>
        
        </tbody>
        </table>

        </div>

</div>
     </div>
        </div>
    
</div>
@endsection