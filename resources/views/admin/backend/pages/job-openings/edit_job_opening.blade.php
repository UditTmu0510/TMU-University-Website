@extends('layouts.adminlayout_new')
@section('content')
<style>
    .color-table.success-table thead th {
        background-color: #00c292;
        color: #fff;
    }
    </style>
    <div class="pagetitle">
        <h1>Update Job Opening</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Job Openings</a></li>
            {{-- <li class="breadcrumb-item">Permission</li> --}}
            <li class="breadcrumb-item active">Update Job Opening</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->


      <section class="section">
    <div class="row">
        <div class="col-lg-12">
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

    <div class="card">
    <div class="card-body">
      {{-- <h5 class="card-title">Group Name</h5> --}}

      <!-- Multi Columns Form -->
      <form  method="POST" action="{{route('update.jobopening',['id' => $jobopening->id])}}" enctype="multipart/form-data" >
        @csrf
        <div class="row" style="margin-top:30px;">

            <div class="col-md-6">
                <label for="title" class="form-label" style="font-size:13px;">Title</label>
                <input type="text" name="title" id="title" value = "{{$jobopening->title}}" class="form-control" required />
            </div>

            <div class="col-md-6">
                <label for="category" class="form-label">Job Category</label>
                <select class="form-select" name="category" id = "category" aria-label="Default select example" required>
                    <option value="">Select Category</option>
                    <option value="Academic" {{$jobopening->category == 'Academic' ? 'selected' : ''}}>Academic</option>
                    <option value="Administration"  {{$jobopening->category == 'Administration' ? 'selected' : ''}}>Administration</option>
                  </select>
                
              </div>

    </div>

    <div class="row mt-3">
        <div class="col-md-6">
          <label for="description" class="form-label">Description</label>
          <textarea rows="4" cols="50" name="description" id="description">{{$jobopening->description}}</textarea><span class="highlight"></span> <span class="bar"></span>
        </div>
        <div class="col-md-6">
            <label for="responsibilities" class="form-label">Responsibilities</label>
            <textarea rows="4" cols="50" name="responsibilities" id="responsibilities">{{$jobopening->responsibilities}}</textarea><span class="highlight"></span> <span class="bar"></span>
          </div>
      </div>

      <div class="row mt-3">
        <div class="col-md-4">
            <label for="requirements" class="form-label">Requirements</label>
            <textarea rows="4" cols="50" name="requirements" id="requirements">{{$jobopening->requirements}}</textarea><span class="highlight"></span> <span class="bar"></span>
          </div>

          <div class="col-md-4">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" name="status" id = "status" aria-label="Default select example" required>
                <option>Select Status</option>
                <option value="1" {{$jobopening->status == 1 ? 'Selected' : ''}}>Yes</option>
                <option value="0" {{$jobopening->status == 0 ? 'Selected' : ''}}>No</option>
              </select>
          </div>
          
          <div class="col-md-2">
            <label for="priority" class="col-form-label">Priority</label>
            <input class="form-control" type="number" name="priority" id="priority"  value="{{$jobopening->priority}}" required />
          </div>

      </div>

              


        <div class="text-center"><br/>
          <input type="submit" class="btn btn-primary" value="Update Job Opening" id="myButton"  />
      
        </div>
      </form><!-- End Multi Columns Form -->

    </div>
  </div>
</div>
</div>
</section>

@endsection
