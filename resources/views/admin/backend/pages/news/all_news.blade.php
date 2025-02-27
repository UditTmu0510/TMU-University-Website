@extends('layouts.adminlayout_new')
@section('content')
<div class="pagetitle">
    <h1>All News Category</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">News</a></li>
        <li class="breadcrumb-item">Category</li>
        <li class="breadcrumb-item active">All News</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->




  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">All News </h5>

             
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
              @if(Auth::user()->can('Add News'))
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered">
               Add News
              </button>
            @endif
            </div>


            <table class="table datatable">
              <thead>
                <tr>
                  <th><b>S.</b>No.</th>
                  <th>Event Title</th>
                  <th>Event Category</th>
                  <th>Event Date</th>
                
                  <th>Posted At</th>
                  <th>Display Main</th>
                  <th>Status</th>
                  <th>Action</th>
                  
                </tr>
              </thead>
              
              <tbody>
                @php
                $counter = 1;
            @endphp
@foreach($news as $key=> $item)
            <tr>
                <td>{{$counter}}</td>
<td>{{$item->event_title}}</td>
<td>{{$item->category}}</td>
<td>{{$item->event_date}}</td>
<td>{{$item->posted_at}}</td>
<td>
@php
if($item->display_main == 'Y') {
  echo "<span style='color:green'>Active</span>";
}else {
  echo "<span style='color:red'>IN Active</span>";
}
@endphp

</td>


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
@if(Auth::user()->can('Edit Past Event'))
<a href="{{route('edit.news.post',$item->id)}}" class="btn btn-primary">Edit</a>
@endif

@if(Auth::user()->can('Delete Past Event'))
<a href="{{route('delete.news.post',$item->id)}}" class="btn btn-danger">Delete</a>
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