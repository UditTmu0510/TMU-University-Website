
@extends('layouts.adminlayout_new')
@section('content')
<div class="pagetitle">
    <h1>All Jobs</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Job Openings</a></li>
        <li class="breadcrumb-item active">All Job Openings</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->




  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">All Job Openings</h5>

             
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
            <div class="d-flex justify-content-between mb-3 mt-3">
            <!-- Table with stripped rows -->

            </div>

<div class="table-responsive">
            <table class="table datatable">
              <thead>
                <tr>
                  <th><b>S.</b>No.</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Description</th>
                  <th>Responsibilities</th>
                  <th>Requirements</th>
                  <th>Status</th>
                   <th>Created At</th>
           
                    <th>Actions</th>
                </tr>
              </thead>
              
              <tbody>
                @php
                $counter = 1;
            @endphp
@foreach($jobopenings as $key=> $item)

    
            <tr>
                <td>{{$counter}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->category}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->responsibilities}}</td>
                <td>{{$item->requirements}}</td>
              <td>@if($item->status == 1)
                <span style="color:green;">Active</span>
                @elseif ($item->status == 0)
                <span style="color:red;">Inactive</span>
                @endif
              </td>
              <td>{{$item->created_at}}</td>
                <td>
                    @if(Auth::user()->can('Edit Job Opening'))
                    <a href="{{ route('edit.jobopening', ['id' => $item->id]) }}" class="btn btn-primary">Edit</a>
                    @endif
                    
                    @if(Auth::user()->can('Delete Job Opening'))
                    <a href="{{ route('delete.jobopening', ['id' => $item->id]) }}" class="btn btn-danger">Delete</a>
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
        </div>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>
  
@endsection