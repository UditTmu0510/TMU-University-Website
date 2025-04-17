@extends('layouts.adminlayout_new')
@section('content')
<div class="pagetitle">
    <h1>IQAC Feedback Forms</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">IQAC Feedback Forms</a></li>
            <li class="breadcrumb-item active">All Forms</li>
        </ol>
    </nav>
</div><!-- End Page Title -->




<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">All Forms</h5>


                    @if(session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                    @endif

                    @if(session('error'))
                    <div class="alert alert-danger">
                        {{session('error')}}
                    </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th><b>S.</b>No.</th>
                                    <th>Forms Details</th>


                                    <th>Download Excel</th>

                                </tr>
                            </thead>

                            <tbody>



                                <tr>
                                    <td>1</td>
                                    <td>Alumni Feedback </td>
                                    <td>


                                        <a href="{{ route('download.alumni.feedback') }}" class="btn btn-primary">Download Alumni Feedback</a>

                                        

                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Expert Feedback</td>
                                    <td>

                                    <a href="{{ route('download.expert.feedback') }}" class="btn btn-primary">Download Expert Feedback</a>
                                        

                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        Employer Feedback</td>
                                    <td>

                                    <a href="{{ route('download.employer.feedback') }}" class="btn btn-primary">Download Employer Feedback</a>
                                        

                                    </td>
                                </tr>


                                <tr>
                                    <td>4</td>
                                    <td>
                                        Teachers Feedback
                                    </td>
                                    <td>

                                    <a href="{{ route('download.teachers.feedback') }}" class="btn btn-primary">Download Teachers Feedback</a>

                                    </td>
                                </tr>







                            </tbody>


                        </table>
                    </div>
                    <!-- End Table with stripped rows -->

                </div>
            </div>

        </div>
    </div>
</section>

@endsection