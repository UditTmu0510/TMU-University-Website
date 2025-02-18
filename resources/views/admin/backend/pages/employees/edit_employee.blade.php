@extends('layouts.adminlayout_new')
@section('content')
<style>
.color-table.success-table thead th {
    background-color: #00c292;
    color: #fff;
}
</style>
<div class="pagetitle">
    <h1>Edit Employee</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Employees</a></li>
        {{-- <li class="breadcrumb-item">Permission</li> --}}
        <li class="breadcrumb-item active">Edit Employee</li>
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
      <form  method="POST" action="{{ route('employee.edit', ['id' => $employee->employee_id]) }}" enctype="multipart/form-data" >
        @csrf
        <div class="row" style="margin-top:30px;">
        <div class="col-md-3">
          <label for="cd_id" class="form-label">Select College</label>
          <select class="form-select" name="cd_id" id ="cd_id" aria-label="Default select example" required />
            <option> Select College Name </option>
            <option value="0" {{$employee->cd_id == 0 ? 'selected' : ''}}>University Administration</option>
            @foreach ($colleges as $college)
            <option value="{{$college->cd_id}}" {{$employee->cd_id == $college->cd_id ? 'selected' : ''}}>{{$college->cd_name}}</option>
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
              @foreach($designations as $designation)
              <option value="{{$designation->designation_id}}" {{$employee->designation_id == $designation->designation_id ? 'selected' : ''}}>{{$designation->designation_name}}</option>
              @endforeach
  
            </select>
          </div>

          
      <div class="col-md-3">
        <label for="employee_image_path" class="col-form-label">Employee Image</label>
                <input class="form-control dropify" name="employee_image_path" id="employee_image_path"  type="file" data-default-file="{{asset($employee->employee_image_path)}}" >
                <br/>
                {{-- <input class="form-control" name="programme_brochure_alt_tag" id="programme_brochure_alt_tag" type="text" placeholder="Alt Tag"> --}}
      </div>
      


    
      


    </div>
    <div class="row mt-3">

        <div class="col-md-3">
            <label for="first_name" class="form-label" style="font-size:13px;">First Name</label>
            <input type="text" name="first_name" id="first_name" value="{{$employee->first_name}}" class="form-control" required />
          </div>
        <div class="col-md-3">
            <label for="last_name" class="form-label" style="font-size:13px;">Last Name</label>
            <input type="text" name="last_name" id="last_name" value="{{$employee->last_name}}" class="form-control" required />
          </div>

          <div class="col-md-3">
            <label for="email" class="form-label" style="font-size:13px;">Email</label>
            <input type="text" name="email" id="email" class="form-control" value="{{$employee->email}}"/>
          </div>

          <div class="col-md-3">
            <label for="phone" class="form-label" style="font-size:13px;">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{$employee->phone}}" />
          </div>
    </div>
              

        <div class="row mt-3">
            <div class="col-md-2">
                <label for="is_head" class="form-label">Is Head ?</label>
                <select class="form-select" name="is_head" id = "is_head" aria-label="Default select example" required>
                    <option>is Head ?</option>
                    <option value="Y" {{$employee->is_head == 'Y' ? 'selected' : ''}}>Yes</option>
                    <option value="N" {{$employee->is_head == 'N' ? 'selected' : ''}}>No</option>
                  </select>
                
              </div>


              <div class="col-md-6">
                <label for="area" class="form-label">Head Message</label>
              <textarea rows="4" cols="50" name="area"  id="area">{{$employee->head_message}}</textarea><span class="highlight"></span> <span class="bar"></span>
              </div>


              <div class="col-md-2">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" name="status" id = "status" aria-label="Default select example" required>
                    <option>Select Status</option>
                    <option value="Y" {{$employee->status == 'Y' ? 'selected' : ''}}>Yes</option>
                    <option value="N" {{$employee->status == 'N' ? 'selected' : ''}}>No</option>
                  </select>
                
              </div>


             
              <div class="col-md-2">
                <label for="priority" class="form-label" style="font-size:13px;">Priority</label>
                <input type="text" name="priority" id="priority" class="form-control" value="{{$employee->priority}}" required />
              </div>


</div> 



        <div class="text-center"><br/>
          <input type="submit" class="btn btn-primary" value="Update Employee"/>
      
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


<script type="text/javascript">
 //make ajax request function starts here
 const department_id = "<?php echo $employee->department_id; ?>";
  function makeAjaxRequest(url,data)
  {
  return new Promise(function (resolve,reject){
  
  $.ajax({
  url: url,
  method: 'post',
  data: data,
  dataType: 'json',
  success: resolve,
  error: reject
  });
  
  });
  
  }


  window.onload = async function (){
  
  try{
 
  let cdID = $("#cd_id").val();
  const response1 = await makeAjaxRequest('{!! route("getemployeedepartment") !!}',{ _token: '{{ csrf_token() }}',cdID: cdID})
  $('#department_id').find('option').remove();
  $.each(response1, function (index, data) {
  $('#department_id').append('<option value="' + data['department_id'] + '"' + (department_id == data['department_id'] ? ' selected' : '') + '>' + data['department_name'] + '</option>');
  }); 
  
   const response2 = await makeAjaxRequest('{!! route("getemployeedepartment") !!}',{ _token: '{{ csrf_token() }}',cdID: 0});
  
  
    $.each(response2, function (index, data) { 
                  $('#department_id').append('<option value="' + data['department_id'] + '"' + (branch_id == data['department_id'] ? ' selected' : '') + '>' + data['department_name'] + '</option>');
              });
  
  }catch (error) {
    console.error("Ajax error: " + error.responseText);
  }
  
  };

</script>

@endsection

