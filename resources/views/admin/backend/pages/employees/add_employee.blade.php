@extends('layouts.adminlayout_new')
@section('content')
<style>
.color-table.success-table thead th {
    background-color: #00c292;
    color: #fff;
}
</style>
<div class="pagetitle">
    <h1>Add Employee</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Employees</a></li>
        {{-- <li class="breadcrumb-item">Permission</li> --}}
        <li class="breadcrumb-item active">Add Employee</li>
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
      <form  method="POST" action="{{route('add.employee')}}" enctype="multipart/form-data" >
        @csrf
        <div class="row" style="margin-top:30px;">
        <div class="col-md-3">
          <label for="cd_id" class="form-label">Select College</label>
          <select class="form-select" name="cd_id" id ="cd_id" aria-label="Default select example" required />
            <option> Select College Name </option>
            <option value="0">University Administration</option>
            @foreach ($colleges as $college)
            <option value="{{$college->cd_id}}">{{$college->cd_name}}</option>
            @endforeach


          </select>
        </div>

        <div class="col-md-3">
          <label for="department_id" class="form-label">Select Department</label>
          <select class="form-select" name="department_id" id ="department_id" aria-label="Default select example" required />
            <option>Select Department</option>

          </select>
        </div>

        <div class="col-md-3">
            <label for="designation_id" class="form-label">Select Designation</label>
            <select class="form-select" name="designation_id" id ="designation_id" aria-label="Default select example" required />
              <option>Select Designation</option>

            </select>
          </div>

          
      <div class="col-md-3">
        <label for="employee_image_path" class="col-form-label">Employee Image</label>
                <input class="form-control dropify" name="employee_image_path" id="employee_image_path"  type="file" >
                <br/>
                {{-- <input class="form-control" name="programme_brochure_alt_tag" id="programme_brochure_alt_tag" type="text" placeholder="Alt Tag"> --}}
      </div>
      


    
      


    </div>
    <div class="row mt-3">

        <div class="col-md-3">
            <label for="first_name" class="form-label" style="font-size:13px;">First Name</label>
            <input type="text" name="first_name" id="first_name" class="form-control" required />
          </div>
        <div class="col-md-3">
            <label for="last_name" class="form-label" style="font-size:13px;">Last Name</label>
            <input type="text" name="last_name" id="last_name" class="form-control" required />
          </div>

          <div class="col-md-3">
            <label for="email" class="form-label" style="font-size:13px;">Email</label>
            <input type="text" name="email" id="email" class="form-control" />
          </div>

          <div class="col-md-3">
            <label for="phone" class="form-label" style="font-size:13px;">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" />
          </div>
    </div>
              

        <div class="row mt-3">
            <div class="col-md-2">
                <label for="is_head" class="form-label">Is Head ?</label>
                <select class="form-select" name="is_head" id = "is_head" aria-label="Default select example" required>
                    <option>is Head ?</option>
                    <option value="Y">Yes</option>
                    <option value="N">No</option>
                  </select>
                
              </div>


              <div class="col-md-6">
                <label for="area" class="form-label">Head Message</label>
              <textarea rows="4" cols="50" name="area"  id="area"></textarea><span class="highlight"></span> <span class="bar"></span>
              </div>


              <div class="col-md-2">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" name="status" id = "status" aria-label="Default select example" required>
                    <option>Select Status</option>
                    <option value="Y">Yes</option>
                    <option value="N">No</option>
                  </select>
                
              </div>


             
              <div class="col-md-2">
                <label for="priority" class="form-label" style="font-size:13px;">Priority</label>
                <input type="text" name="priority" id="priority" class="form-control" value="{{$priority}}" required ReadOnly/>
              </div>


</div> 



        <div class="text-center"><br/>
          <input type="submit" class="btn btn-primary" value="Add Employee"/>
      
        </div>
      </form><!-- End Multi Columns Form -->

    </div>
  </div>
</div>
</div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#cd_id').change(function () {
        var cdID1 = $(this).val();  

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


$('#department_id').change(function () {
    var cdID1 = $('#cd_id').val();
    var department_id = $(this).val();

    $.ajax({
        url: '{!! route("getemployeedesignationhrform") !!}',
        method: 'post',
        data: {
            _token: '{{ csrf_token() }}',
            cdID: cdID1,
            department_id: department_id
        },
        dataType: 'json',
        success: function(response) {
            $('#designation_id').find('option').remove();
            $('#designation_id').append('<option value="">Select Designation</option>');
            $.each(response, function(index, data) {
                $('#designation_id').append('<option value="' + data.designation_id + '">' + data.designation_name.designation_name + '</option>');
            });
        },
        error: function(xhr, status, error) {
            console.error("Error: " + error); // Log the error for debugging
            $('#designation_id').find('option').remove();
            $('#designation_id').append('<option value="">No Designation Added</option>');
        }
    });
});
</script>


@endsection

