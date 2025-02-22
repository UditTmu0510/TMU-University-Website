@extends('layouts.adminlayout_new')
@section('content')
<div class="pagetitle">
    <h1>All Employees</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Employee</a></li>
        <li class="breadcrumb-item active">All Employee</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->




  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">All Employees</h5>

             
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
              @if(Auth::user()->can('Add Employee'))
              <a href="{{route('add.employee')}}" target="_blank"  class="btn btn-primary">
               Add Employee
              </a>
            @endif
            </div>


            <table class="table datatable">
              <thead>
                <tr>
                  <th><b>S.</b>No.</th>
                  <th>College Name</th>
                  <th>Department Name</th>
                  <th>Designation</th>
                  <th>Name</th>
                  <th>Status</th>
                  <th>Action</th>      
                </tr>
              </thead>
              
              <tbody>
                @php
                $counter = 1;
            @endphp
@foreach($employees as $key=> $item)
            <tr>
                <td>{{$counter}}</td>
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
<td>{{$item->first_name.' '.$item->last_name}}</td>
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
@if(Auth::user()->can('Edit Employee'))
<a href="{{ route('employee.edit', ['id' => $item->employee_id]) }}" class="btn btn-primary">Edit</a>
@endif

@if(Auth::user()->can('Delete Employee'))
<a href="{{ route('delete.employee', ['id' => $item->employee_id]) }}" class="btn btn-danger">Delete</a>
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