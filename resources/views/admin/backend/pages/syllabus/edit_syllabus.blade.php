@extends('layouts.adminlayout_new')
@section('content')
<style>
.color-table.success-table thead th {
    background-color: #00c292;
    color: #fff;
}
</style>
<div class="pagetitle">
    <h1>Edit Syllabus</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Syllabus</a></li>
        <li class="breadcrumb-item active">Edit Syllabus</li>
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


      <!-- Multi Columns Form -->
      <form  method="POST" action="{{route('syllabus.edit',['id' => $syllabus->id])}}" enctype="multipart/form-data" >
        @csrf
        <div class="row" style="margin-top:30px;">
        <div class="col-md-4">
          <label for="college_id" class="form-label">Select College</label>
          <select class="form-select" name="cd_id" id ="college_id" aria-label="Default select example" required />
            <option> Select College Name </option>
            @foreach ($colleges as $college)
            <option {{$syllabus->cd_id == $college->cd_id ? 'selected' : ''}} value="{{$college->cd_id}}">{{$college->cd_name}}</option>
            @endforeach


          </select>
        </div>

        <div class="col-md-4">
          <label for="branch_id" class="form-label">Select Programme</label>
          <select class="form-select" name="prog_id" id ="branch_id" aria-label="Default select example" required />
            <option>Select Programme</option>
       


          </select>
        </div>

         
      <div class="col-md-4">
        <label for="file_path" class="col-form-label">Syllabus File</label>
        @if(empty($syllabus->file_path))
        <input class="form-control dropify" name="file_path" id="file_path" type="file" required /><br/>
        @else
        <input class="form-control dropify" name="file_path" id="file_path" type="file" data-default-file="{{asset($college->file_path)}}" /><br/>
        @endif
    </div>

    </div>

              

        <div class="row mt-3">
            <div class="col-md-4">
                <label for="acad_year" class="form-label">Academic Year</label>
                <select class="form-select" name="acad_year" id = "acad_year" aria-label="Default select example" required>
                    <option>Select Academic Year</option>
                     <option {{$syllabus->acad_year == '2028-29' ? 'selected' : ''}} value="2028-29">2028-29</option>
                     <option {{$syllabus->acad_year == '2027-28' ? 'selected' : ''}} value="2027-28">2027-28</option>
                     <option {{$syllabus->acad_year == '2026-27' ? 'selected' : ''}} value="2026-27">2026-27</option>
                    <option {{$syllabus->acad_year == '2025-26' ? 'selected' : ''}} value="2025-26">2025-26</option>
                    <option {{$syllabus->acad_year == '2024-25' ? 'selected' : ''}} value="2024-25">2024-25</option>
                    <option {{$syllabus->acad_year == '2023-24' ? 'selected' : ''}} value="2023-24">2023-24</option>
                    <option {{$syllabus->acad_year == '2022-23' ? 'selected' : ''}} value="2022-23">2022-23</option>
                    <option {{$syllabus->acad_year == '2021-22' ? 'selected' : ''}} value="2021-22">2021-22</option>
                    <option {{$syllabus->acad_year == '2020-21' ? 'selected' : ''}} value="2020-21">2020-21</option>
                    <option {{$syllabus->acad_year == '2019-20' ? 'selected' : ''}} value="2019-20">2019-20</option>
                    <option {{$syllabus->acad_year == '2018-19' ? 'selected' : ''}} value="2018-19">2018-19</option>
                    
                    
                        <option {{$syllabus->acad_year == '2017-18' ? 'selected' : ''}} value="2017-18">2017-18</option>
                    <option {{$syllabus->acad_year == '2016-17' ? 'selected' : ''}} value="2016-17">2016-17</option>
                    <option {{$syllabus->acad_year == '2015-16' ? 'selected' : ''}} value="2015-16">2015-16</option>
                    <option {{$syllabus->acad_year == '2014-15' ? 'selected' : ''}} value="2014-15">2014-15</option>
                      <option {{$syllabus->acad_year == '2013-14' ? 'selected' : ''}} value="2013-14">2013-14</option>
                        <option {{$syllabus->acad_year == '2012-13' ? 'selected' : ''}} value="2012-13">2012-13</option>
                                      <option {{$syllabus->acad_year == '2011-12' ? 'selected' : ''}} value="2011-12">2011-12</option>
                  </select>
                
              </div>


              <div class="col-md-4">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" name="status" id = "status" aria-label="Default select example" required>
                    <option>Select Status</option>
                    <option {{$syllabus->status == 1 ? 'selected' : ''}} value="1">Yes</option>
                    <option {{$syllabus->status == 0 ? 'selected' : ''}} value="0">No</option>
                  </select>
              </div>


</div> 

        <div class="text-center"><br/>
          <input type="submit" class="btn btn-primary" value="Update Syllabus"/>
      
        </div>
      </form><!-- End Multi Columns Form -->

    </div>
  </div>
</div>
</div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script type="text/javascript">

  //make ajax request function starts here
  const branch_id = "<?php echo $syllabus->prog_id; ?>";
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
  
  //make ajax request function ends here
  
  // function to autoload the master programme starts here
  
  window.onload = async function (){
  
  try{

  let cdID = $("#college_id").val();
  const response1 = await makeAjaxRequest('{!! route("getmasterprogramme") !!}',{ _token: '{{ csrf_token() }}',cdID: cdID})
  console.log(response1);
  $('#branch_id').find('option').remove();
  $.each(response1, function (index, data) {
  $('#branch_id').append('<option value="' + data['prog_id'] + '"' + (branch_id == data['prog_id'] ? ' selected' : '') + '>' + data['prog_name'] + '</option>');
  }); 
  
   const response2 = await makeAjaxRequest('{!! route("getmasterprogramme") !!}',{ _token: '{{ csrf_token() }}',cdID: -1});
  
  
    $.each(response2, function (index, data) {
                  $('#branch_id').append('<option value="' + data['prog_id'] + '"' + (branch_id == data['prog_id'] ? ' selected' : '') + '>' + data['prog_name'] + '</option>');
              });
  
  }catch (error) {
    console.error("Ajax error: " + error.responseText);
  }
  
  };

  
  // function to autoload the master programme ends here.
  
  </script>
@endsection

