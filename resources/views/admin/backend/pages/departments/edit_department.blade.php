@extends('layouts.adminlayout_new')
@section('content')
<style>
.color-table.success-table thead th {
    background-color: #00c292;
    color: #fff;
}
</style>
<div class="pagetitle">
    <h1>Edit Department</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Departments</a></li>
        {{-- <li class="breadcrumb-item">Permission</li> --}}
        <li class="breadcrumb-item active">Edit Department</li>
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
      <form  method="POST" action="{{route('department.edit',['id'=>$department->department_id])}}" enctype="multipart/form-data" >
        @csrf
        <div class="row" style="margin-top:30px;">
        
            <div class="col-md-6">
          <label for="cd_id" class="form-label">Select College</label>
          <select class="form-select" name="cd_id" id ="cd_id" aria-label="Default select example" required/>
            <option> Select College Name </option>
            <option value="0" {{$department->cd_id == 0 ? 'selected': ''}}>University Department</option>
            @foreach ($colleges as $college)
            <option value="{{$college->cd_id}}" {{$department->cd_id == $college->cd_id ? 'selected': ''}}>{{$college->cd_name}}</option>
            @endforeach


          </select>
        </div>

        <div class="col-md-6">
            <label for="department_name" class="form-label" style="font-size:13px;">Department Name</label>
            <input type="text" name="department_name" id="department_name" value="{{$department->department_name}}" class="form-control" required />
          </div>

    </div>

              

        <div class="row mt-3">
           


              <div class="col-md-6">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" name="status" id = "status" aria-label="Default select example" required>
                    <option >Select Status</option>
                    <option {{$department->status == 'Y' ? 'selected' : ''}} value="Y">Yes</option>
                    <option {{$department->status == 'N' ? 'selected' : ''}} value="N">No</option>
                  </select>
              </div>

              <div class="col-md-6">
                <label for="priority" class="form-label" style="font-size:13px;">Priority</label>
                <input type="text" name="priority" id="priority" class="form-control" value="{{$department->priority}}"required />
              </div>


</div> 

        <div class="text-center"><br/>
          <input type="submit" class="btn btn-primary" value="Update Department"/>
      
        </div>
      </form><!-- End Multi Columns Form -->

    </div>
  </div>
</div>
</div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@endsection

