@extends('layouts.adminlayout_new')
@section('content')
<style>
.color-table.success-table thead th {
    background-color: #00c292;
    color: #fff;
}
</style>
<div class="pagetitle">
    <h1>Add Department Designation</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Department Designation</a></li>
        {{-- <li class="breadcrumb-item">Permission</li> --}}
        <li class="breadcrumb-item active">Add Department Designation</li>
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
      <form  method="POST" action="{{route('add.departmentdesignation')}}" enctype="multipart/form-data" >
        @csrf
        <div class="row" style="margin-top:30px;">
        <div class="col-md-4">
          <label for="cd_id" class="form-label">Select College</label>
          <select class="form-select" name="cd_id" id ="cd_id" aria-label="Default select example" required />
            <option> Select College Name </option>
            <option value="0">University Administration</option>
            @foreach ($colleges as $college)
            <option value="{{$college->cd_id}}">{{$college->cd_name}}</option>
            @endforeach


          </select>
        </div>

        <div class="col-md-4">
          <label for="department_id" class="form-label">Select Department</label>
          <select class="form-select" name="department_id" id ="department_id" aria-label="Default select example" required />
            <option>Select Department</option>

          </select>
        </div>

        <div class="col-md-4">
            <label for="designation_id" class="form-label">Select Designation</label>
            <select class="form-select" name="designation_id" id ="designation_id" aria-label="Default select example" required />
              <option>Select Designation</option>
              @foreach($designations as $designation)
              <option value="{{$designation->designation_id}}">{{$designation->designation_name}}</option>
              @endforeach
  
            </select>
          </div>

    </div>
    
              

    



        <div class="text-center"><br/>
          <input type="submit" class="btn btn-primary" value="Add Department Designation"/>
      
        </div>
      </form><!-- End Multi Columns Form -->

    </div>
  </div>
</div>
</div>
</section>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#cd_id').change(function () {
        var cdID1 = $(this).val();  
        alert('college id = ' + cdID1);  

        $.ajax({
            url: '{!! route("getemployeedepartment") !!}',
            method: 'post',
            data: {
                _token: '{{ csrf_token() }}',
                cdID: cdID1
            },
            dataType: 'json',
            success: function(response) {
                $('#department_id').find('option').remove();
                $('#department_id').append('<option value="">Select Department</option>');
                $.each(response, function(index, data) {
                    $('#department_id').append('<option value="' + data.department_id + '">' + data.department_name + '</option>');
                });
            },
            error: function() {
                // On failure, perform the specified task
                $('#department_id').find('option').remove();
                $('#department_id').append('<option value="">No Department Added</option>');
            }
        });
    });
});
</script>


@endsection

