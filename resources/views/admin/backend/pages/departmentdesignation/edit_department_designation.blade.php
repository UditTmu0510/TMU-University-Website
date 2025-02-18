@extends('layouts.adminlayout_new')
@section('content')
<style>
.color-table.success-table thead th {
    background-color: #00c292;
    color: #fff;
}
</style>
<div class="pagetitle">
    <h1>Edit Department Designation</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Department Designations</a></li>
        {{-- <li class="breadcrumb-item">Permission</li> --}}
        <li class="breadcrumb-item active">Edit Department Designation</li>
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
      <form  method="POST" action="{{ route('departmentdesignation.edit', ['id' => $departmentdesignation->id]) }}" enctype="multipart/form-data" >
        @csrf
        <div class="row" style="margin-top:30px;">
        <div class="col-md-3">
          <label for="cd_id007" class="form-label">Select College</label>
          <select class="form-select" name="cd_id" id ="cd_id007" aria-label="Default select example" required />
            <option> Select College Name </option>
            <option value="0" {{$departmentdesignation->cd_id == 0 ? 'selected' : ''}}>University Administration</option>
            @foreach ($colleges as $college)
            <option value="{{$college->cd_id}}" {{$departmentdesignation->cd_id == $college->cd_id ? 'selected' : ''}}>{{$college->cd_name}}</option>
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
              <option value="{{$designation->designation_id}}" {{$departmentdesignation->designation_id == $designation->designation_id ? 'selected' : ''}}>{{$designation->designation_name}}</option>
              @endforeach
  
            </select>
          </div>


    
      


    </div>
    
              



        <div class="text-center"><br/>
          <input type="submit" class="btn btn-primary" value="Update Department Designation"/>
      
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
        $('#cd_id007').change(function () {
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


<script type="text/javascript">
 //make ajax request function starts here
 const department_id = "<?php echo $departmentdesignation->department_id; ?>";
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
 
  let cdID = $("#cd_id007").val();
  const response1 = await makeAjaxRequest('{!! route("getemployeedepartment") !!}',{ _token: '{{ csrf_token() }}',cdID: cdID})
  $('#department_id').find('option').remove();
  $.each(response1, function (index, data) {
  $('#department_id').append('<option value="' + data['department_id'] + '"' + (department_id == data['department_id'] ? ' selected' : '') + '>' + data['department_name'] + '</option>');
  }); 
  
  //  const response2 = await makeAjaxRequest('{!! route("getemployeedepartment") !!}',{ _token: '{{ csrf_token() }}',cdID: 0});
  
  
  //   $.each(response2, function (index, data) { 
  //                 $('#department_id').append('<option value="' + data['department_id'] + '"' + (branch_id == data['department_id'] ? ' selected' : '') + '>' + data['department_name'] + '</option>');
  //             });
  
  }catch (error) {
    console.error("Ajax error: " + error.responseText);
  }
  
  };

</script>

@endsection

