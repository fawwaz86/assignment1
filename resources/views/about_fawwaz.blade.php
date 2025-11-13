@extends('master')

@section('title', 'Fawwaz')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">

            <!-- Personal Details -->
            <div class="card mb-3">
                <div class="card-body w-100">
                    <h2>Personal Details</h2>

                    <img class="d-block mx-auto border border-dark border-3 rounded" src="{{ asset('images/fawwaz.jpg') }}"
                        alt="fawwaz Photo" width="200">

                    <div class="text-start fw-bold pt-2">
                        <p>Mohamad Fawwaz Hatmi Bin Mohd Faudzan</p>
                        <p>CB21073</p>
                        <p>No. 356, Jalan Kenanga 7/2, Persiaran Amanjaya 5, 08000, Sungai Petani, Kedah</p>
                    </div>
                </div>
            </div>

            <!-- Education -->
            <div class="col-md-8 w-100">
                <div class="card mb-3 p-3">
                    <h3>Education</h3>
                    <table class="table table-striped table-bordered table-hover table-sm">
                        <thead class="table-primary">
                            <tr>
                                <th>No</th>
                                <th>Institution's Name</th>
                                <th>Year</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Sekolah Kebangsaan Tasek Apong</td>
                                <td>2012</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Sekolah Menengah Kebangsaan Agama Sik</td>
                                <td>2019</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Kolej MARA KULIM</td>
                                <td>2021</td>
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

            <!-- Skills -->
            <div class="col-md-8 w-100">
                <div class="card mb-3 p-3">
                    <h3>Skills</h3>
                    <table class="table table-striped table-bordered table-hover table-sm">
                        <thead class="table-success">
                            <tr>
                                <th>No</th>
                                <th>Skill</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Laravel</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>C#</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Flutter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Hobbies -->
            <div class="col-md-8 w-100">
                <div class="card mb-3 p-3">
                    <h3>Hobbies</h3>
                    <table class="table table-striped table-bordered table-hover table-sm">
                        <thead class="table-info">
                            <tr>
                                <th>No</th>
                                <th>Hobby</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Cooking</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Reading</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Jogging</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection