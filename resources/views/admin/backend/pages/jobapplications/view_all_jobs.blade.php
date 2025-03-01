@extends('layouts.adminlayout_new')
@section('content')
<div class="pagetitle">
    <h1>All Jobs</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Jobs</a></li>
        <li class="breadcrumb-item active">All Jobs</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->




  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">All Jobs</h5>

             
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
            <!-- Table with stripped rows -->


<div class="table-responsive">
            <table class="table datatable">
              <thead>
                <tr>
                  <th><b>S.</b>No.</th>
                  <th>Application Id</th>
                  <th>College</th>
                  <th>Department</th>
                  <th>Designation</th>
                  <th>Name</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>Category</th>
    <th>Resume</th>
    <th>Application</th>
                </tr>
              </thead>
              
              <tbody>
                @php
                $counter = 1;
            @endphp
@foreach($job_applications as $key=> $item)

    
            <tr>
                <td>{{$counter}}</td>
                <td>{{$item->application_id}}</td>
                <td>
                  @if (!empty($item['college_name']['cd_name']))
                  {{$item['college_name']['cd_name']}}
                @else
                  University Administration
                @endif
                
              </td>
              <td>
                  @if (!empty($item['department_name']['department_name'])) <!-- Check if colleges relationship is not null -->
                  {{$item['department_name']['department_name']}}
                @endif
              </td>
              <td>
                  @if (!empty($item['designation_name']['designation_name'])) <!-- Check if colleges relationship is not null -->
                  {{$item['designation_name']['designation_name']}}
                @endif
              </td>
                <td>{{$item->name}}</td>
                <td>{{$item->mobile_no}}</td>
                <td>{{$item->email}}</td>       
                <td>{{$item->current_comp_category}}</td> 
                <td>
   
                  <a href="{{ asset($item->applicant_resume_path) }}" target="_blank" class="btn btn-primary">View</a>
               
                </td>
                <td>
          
                  <a href="{{ route('generate.jobapplication.pdf',$item->id) }}" target="_blank" class="btn btn-primary">View</a>

                </td>                                                                                                                                                                 
            </tr>
@php
$counter++;
@endphp

@endforeach
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