@extends('layouts.adminlayout_new')
@section('content')
<div class="pagetitle">
    <h1>All Blogs Category</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Blogs</a></li>
        <li class="breadcrumb-item">Category</li>
        <li class="breadcrumb-item active">All Blogs Category</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">All Blogs Category</h5>
            
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
              @if(Auth::user()->can('Add Permission'))
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered">
               Add Blog Category
              </button>
            @endif
            </div>
          <div class="table-responsive">
            <table class="table datatable">
              <thead>
                <tr>
                  <th>
                    <b>S.</b>No.
                  </th>
                  <th>Category Name</th>
                  <th>Category Slug</th>
                  <th>Category Status</th>
                  <th>Crerated At</th>
                  <th>Updated At</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @php
                    $counter = 1;
                @endphp
@foreach($category as $key=> $item)
                <tr>
                    <td>{{$counter}}</td>
<td>{{$item->category_name}}</td>
<td>{{$item->category_slug}}</td>
<td>
  @php
  if($item->category_status == 'Y') {
      echo "<span style='color:green'>Active</span>";
  } else {
      echo "<span style='color:red'>IN Active</span>";
  }
  @endphp
  
</td>
<td>{{$item->created_at}}</td>
<td>{{$item->updated_at}}</td>
<td>
  @if(Auth::user()->can('Edit Permission'))
  <a href="{{route('edit.blogs_category',$item->id)}}" class="btn btn-primary">Edit</a>
@endif
</td>
<td>
  @if(Auth::user()->can('Delete Permission'))
<a href="{{route('delete.blogs_category',$item->id)}}" class="btn btn-danger">Delete</a>
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
    </div>
  </section>
  <div class="modal fade" id="verticalycentered" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Blog Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
            <!-- Code Start -->
            <form  method="POST" action="{{route('add.blogs_category')}}" class="row g-3">
                @csrf
                <div class="row" style="margin-top:30px;">
                <div class="col-md-6">
                  <label for="category_name" class="form-label">Category Name</label>
                  <input type="text" name="category_name" class="form-control" id="category_name" />
                </div>
                <div class="col-md-6">
                    <label for="category_slug" class="form-label">Category Slug</label>
                    <input type="text" name="category_slug" class="form-control" id="category_slug" />
                  </div>
            </div>
            <div class="row" style="margin-top:30px;">
                <div class="col-md-6">
                    <label for="category_status" class="form-label">Category Status</label>
                <select  name="category_status" class="form-select" id="category_status" >
                  <option>Category Status</option>
               <option value="Y" >Enable</option>
               <option value="N" >Disable</option>
                </select>
              </div>
             
            </div>
     

            <!-- Code Ends -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary" value="Create" />
        </div>
      </form>
      </div>
    </div>
  </div><!-- End Vertically centered Modal-->
  
@endsection