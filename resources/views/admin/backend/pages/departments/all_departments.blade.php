@extends('layouts.adminlayout_new')
@section('content')
<div class="pagetitle">
    <h1>All Departments</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Departments</a></li>
        <li class="breadcrumb-item active">All Departments</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->




  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">All Departments</h5>

             
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
              @if(Auth::user()->can('Add Department'))
              <a href="{{route('add.department')}}" target="_blank"  class="btn btn-primary">
               Add Department
              </a>
            @endif
            </div>


            <table class="table datatable">
              <thead>
                <tr>
                  <th><b>S.</b>No.</th>
                  <th>Department Name</th>
                  <th>College Name</th>
                  <th>Status</th>
                  <th>Action</th>      
                </tr>
              </thead>
              
              <tbody>
                @php
                $counter = 1;
            @endphp
@foreach($departments as $key=> $item)
            <tr>
                <td>{{$counter}}</td>
                <td>{{$item->department_name}}</td>
            
<td>
    @if (!empty($item['college_name']['cd_name']))
    <!-- Check if colleges relationship is not null -->
    {{$item['college_name']['cd_name']}}
@else
    <!-- If the college_name is null, print 'University Department' -->
    University Department
@endif

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
@if(Auth::user()->can('Edit Department'))
<a href="{{ route('department.edit', ['id' => $item->department_id]) }}" class="btn btn-primary">Edit</a>
@endif

@if(Auth::user()->can('Delete Department'))
<a href="{{ route('delete.department', ['id' => $item->department_id]) }}" class="btn btn-danger">Delete</a>
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