@extends('layouts.adminlayout_new')
@section('content')
<div class="pagetitle">
    <h1>All Criterions</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Criterions</a></li>
        <li class="breadcrumb-item active">All Criterions</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->




  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">All Criterions</h5>

             
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
              @if(Auth::user()->can('Add NAAC Criterion'))
              <a href="{{route('add.naac_criterion')}}" target="_blank"  class="btn btn-primary">
               Add NAAC Criterion
              </a>
            @endif
            </div>


            <table class="table datatable">
              <thead>
                <tr>
                  <th><b>S.</b>No.</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Action</th>      
                </tr>
              </thead>
              
              <tbody>
                @php
                $counter = 1;
            @endphp
@foreach($criterions as $key=> $item)

            <tr>
                <td>{{$counter}}</td>
                <td>{{$item->criterion_name}}</td>
<td>{{$item->criterion_description}}</td>
    <td>
        @php
        if($item->criterion_status == 'Y') {
          echo "<span style='color:green'>Active</span>";
        }else {
          echo "<span style='color:red'>IN Active</span>";
        }
        @endphp
        </td>
<td>
@if(Auth::user()->can('Edit NAAC Criterion'))
<a href="{{ route('naac_criterion.edit', ['id' => $item->criterion_id]) }}" class="btn btn-primary">Edit</a>
@endif

@if(Auth::user()->can('Delete NAAC Criterion'))
<a href="{{ route('delete.naac_criterion', ['id' => $item->criterion_id]) }}" class="btn btn-danger">Delete</a>
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