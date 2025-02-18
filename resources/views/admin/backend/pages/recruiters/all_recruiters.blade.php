@extends('layouts.adminlayout_new')
@section('content')
<div class="pagetitle">
    <h1>All Recruiters</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Recruiters</a></li>
        <li class="breadcrumb-item active">All Recruiters</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->




  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">All Recruiters</h5>

             
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
            <div align="right">
              @if(Auth::user()->can('Add Recruiter'))
              <a href="{{route('add.recruiter')}}" target="_blank"  class="btn btn-primary">
               Add Recruiter
              </a>
            @endif
            </div>


            <table class="table datatable">
              <thead>
                <tr>
                  <th><b>S.</b>No.</th>
                  <th>Image</th>
                  <th>Recruiter Name</th>
                  <th>College Name</th>
                  <th>Programme Name</th>
                  <th>University Page</th>
                  <th>College Page</th>
                  <th>Programme Page</th>
                  <th>Status</th>
                  <th>Action</th>      
                </tr>
              </thead>
              
              <tbody>
                @php
                $counter = 1;
            @endphp
@foreach($recruiters as $key=> $item)
            <tr>
                <td>{{$counter}}</td>
                <td><img class="img img-thumbnail" src ="{{asset($item->recruiter_image_path)}}" /></td>
                <td>{{$item->recruiter_name}}</td>
            
<td>
  @if (!empty($item['college_name']['cd_name'])) <!-- Check if colleges relationship is not null -->
  {{$item['college_name']['cd_name']}}
@endif
</td>

<td>
    @if (!empty($item['programme_name']['prog_name'])) <!-- Check if colleges relationship is not null -->
    {{$item['programme_name']['prog_name']}}
  @endif
  </td>
<td>
@php
if($item->display_university_main == 'Y') {
  echo "<span style='color:green'>Active</span>";
}else {
  echo "<span style='color:red'>IN Active</span>";
}
@endphp

</td>



<td>
    @php
    if($item->display_college_main == 'Y') {
      echo "<span style='color:green'>Active</span>";
    }else {
      echo "<span style='color:red'>IN Active</span>";
    }
    @endphp
    
    </td>

    <td>
        @php
        if($item->display_programme_main == 'Y') {
          echo "<span style='color:green'>Active</span>";
        }else {
          echo "<span style='color:red'>IN Active</span>";
        }
        @endphp
        
        </td>

        <td>
            @php
            if($item->status == 'Y') {
              echo "<span style='color:green'>Active</span>";
            }else {
              echo "<span style='color:red'>IN Active</span>";
            }
            @endphp
            
            </td>

<td>
@if(Auth::user()->can('Edit Recruiter'))
<a href="{{ route('recruiter.edit', ['id' => $item->recruiter_id]) }}" class="btn btn-primary">Edit</a>
@endif

@if(Auth::user()->can('Delete Recruiter'))
<a href="{{ route('delete.recruiter', ['id' => $item->recruiter_id]) }}" class="btn btn-danger">Delete</a>
@endif
</td>                                                                                                                                                                           
            </tr>
@php
$counter++;
@endphp

@endforeach
            </tr>
              </tbody>


            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>
  
@endsection