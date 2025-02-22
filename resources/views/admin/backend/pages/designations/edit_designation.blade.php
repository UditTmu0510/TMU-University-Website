@extends('layouts.adminlayout_new')
@section('content')
<style>
.color-table.success-table thead th {
    background-color: #00c292;
    color: #fff;
}
</style>
<div class="pagetitle">
    <h1>Edit Designation</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Designations</a></li>
        {{-- <li class="breadcrumb-item">Permission</li> --}}
        <li class="breadcrumb-item active">Edit Designation</li>
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
      <form  method="POST" action="{{route('designation.edit',['id'=>$designation->designation_id])}}" enctype="multipart/form-data" >
        @csrf
        <div class="row" style="margin-top:30px;">
        

        <div class="col-md-4">
            <label for="dsesignation_name" class="form-label" style="font-size:13px;">Designation Name</label>
            <input type="text" name="designation_name" id="designation_name" value="{{$designation->designation_name}}" class="form-control" required />
          </div>

          <div class="col-md-6">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" name="status" id = "status" aria-label="Default select example" required>
                <option >Select Status</option>
                <option {{$designation->status == 'Y' ? 'selected' : ''}} value="Y">Yes</option>
                <option {{$designation->status == 'N' ? 'selected' : ''}} value="N">No</option>
              </select>
          </div>

          <div class="col-md-6">
            <label for="priority" class="form-label" style="font-size:13px;">Priority</label>
            <input type="text" name="priority" id="priority" class="form-control" value="{{$designation->priority}}"required />
          </div>

    </div>

              

      

        <div class="text-center"><br/>
          <input type="submit" class="btn btn-primary" value="Update Designation"/>
      
        </div>
      </form><!-- End Multi Columns Form -->

    </div>
  </div>
</div>
</div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@endsection

