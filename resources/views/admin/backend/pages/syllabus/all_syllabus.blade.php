@extends('layouts.adminlayout_new')
@section('content')
<div class="pagetitle">
    <h1>All Syllabus</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">All Syllabus</a></li>
  
        <li class="breadcrumb-item active">All Syllabus</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->




  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">All Syllabus</h5>

             
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
              @if(Auth::user()->can('Add Syllabus'))
              <a href="{{route('add.syllabus')}}" class="btn btn-primary" >
               Add Syllabus
              </a>
            @endif
            </div>


            <table class="table datatable">
              <thead>
                <tr>
                  <th><b>S.</b>No.</th>
                  <th>College Name</th>
                  <th>Programme Name</th>
          
                  <th>Academic Year</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th>Status</th>
                  <th>Action</th>
                  
                </tr>
              </thead>
              
              <tbody>
                @php
                $counter = 1;
            @endphp
@foreach($syllabuses as $key=> $item)
            <tr>
                <td>{{$counter}}</td>
<td>{{$item['cd_name']['cd_name']}}</td>
@if(isset($item['prog_name']['prog_name']))
<td>{{$item['prog_name']['prog_name']}}</td>
@else
<td>N/A</td>
@endif
<td>{{$item->acad_year}}</td>
<td>{{$item->created_at}}</td>
<td>{{$item->updated_at}}</td>
<td>
@php
if($item->status == 1) {
  echo "<span style='color:green'>Active</span>";
}else{
  echo "<span style='color:red'>IN Active</span>";
}
@endphp

</td>


<td>
@if(Auth::user()->can('Edit Syllabus'))
<a href="{{route('syllabus.edit',$item->id)}}" class="btn btn-primary">Edit</a>
@endif

@if(Auth::user()->can('Delete Syllabus'))
<a href="{{route('delete.syllabus',$item->id)}}" class="btn btn-danger">Delete</a>
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