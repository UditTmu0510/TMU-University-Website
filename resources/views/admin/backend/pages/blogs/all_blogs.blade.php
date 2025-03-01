@extends('layouts.adminlayout_new')
@section('content')
<div class="pagetitle">
    <h1>All Blogs</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Blogs</a></li>
  
        <li class="breadcrumb-item active">All Blogs</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->




  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">All Blogs</h5>

             
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
              @if(Auth::user()->can('Add Blog'))
              <a href="{{route('add.blog')}}" class="btn btn-primary" >
               Add Blog
              </a>
            @endif
            </div>


            <table class="table datatable">
              <thead>
                <tr>
                  <th><b>S.</b>No.</th>
                  <th>Blog Title</th>
                  <th>Category</th>
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
@foreach($blogs as $key=> $item)
            <tr>
                <td>{{$counter}}</td>
<td>{{$item->post_title}}</td>
<td>{{$item['category_name']['category_name']}}</td>
<td>{{$item->posted_at}}</td>
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
@if(Auth::user()->can('Edit Blog'))
<a href="{{route('edit.blog',$item->id)}}" class="btn btn-primary">Edit</a>
@endif

@if(Auth::user()->can('Delete Blog'))
<a href="{{route('delete.blog',$item->id)}}" class="btn btn-danger">Delete</a>
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