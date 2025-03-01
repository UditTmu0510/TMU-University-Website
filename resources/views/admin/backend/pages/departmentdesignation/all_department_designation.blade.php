@extends('layouts.adminlayout_new')
@section('content')
<div class="pagetitle">
    <h1>Department Designation</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Department Designation</a></li>
  
        <li class="breadcrumb-item active">All Departments Designations</li>
      </ol>
    </nav>
  </div>




  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">All Department Designation</h5>

             
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
              @if(Auth::user()->can('Add Department Designation'))
              <a href="{{route('add.departmentdesignation')}}" target="_blank"  class="btn btn-primary">
               Add Department Designation
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
                      <th>Action</th> 
                </tr>
              </thead>
              
              <tbody>
                @php
                $counter = 1;
            @endphp
@foreach($depatmentdesignation as $key=> $item)
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


<td>
@if(Auth::user()->can('Edit Department Designation'))
<a href="{{ route('departmentdesignation.edit', ['id' => $item->id]) }}" class="btn btn-primary">Edit</a>
@endif

@if(Auth::user()->can('Delete Department Designation'))
<a href="{{ route('delete.departmentdesignation', ['id' => $item->id]) }}" class="btn btn-danger">Delete</a>
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