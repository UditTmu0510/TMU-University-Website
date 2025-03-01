@extends('layouts.adminlayout_new')
@section('content')
<div class="pagetitle">
    <h1>All Programmes</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Programmes</a></li>
        <li class="breadcrumb-item active">All Programmes</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->




  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">All Programmes</h5>

             
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
              @if(Auth::user()->can('Add Programme'))
              <a href="{{route('add.programme')}}" target="_blank"  class="btn btn-primary">
               Add Programme
              </a>
            @endif
            </div>


            <table class="table datatable">
              <thead>
                <tr>
                  <th><b>S.</b>No.</th>
                  <th>College Name</th>
                  <th>Programme Name</th>
                  <th>Page Slug</th>
                  <th>Intake</th>
                  <th>Status</th>
                  <th>Action</th>      
                </tr>
              </thead>
              
              <tbody>
                @php
                $counter = 1;
            @endphp
@foreach($programmes as $key=> $item)
            <tr>
                <td>{{$counter}}</td>
<td>
  @if (!empty($item['college_name']['cd_name'])) <!-- Check if colleges relationship is not null -->
  {{$item['college_name']['cd_name']}}
@endif
</td>
<td>{{$item->prog_name}}</td>
<td>{{$item->page_slug}}</td>
<td>{{$item->intake}}</td>
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
@if(Auth::user()->can('Edit Programme'))
<a href="{{ route('programme.edit', ['id' => $item->prog_id]) }}" class="btn btn-primary">Edit</a>
@endif

@if(Auth::user()->can('Delete Programme'))
<a href="{{ route('delete.programme', ['id' => $item->prog_id]) }}" class="btn btn-danger">Delete</a>
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