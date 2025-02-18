@extends('layouts.adminlayout_new')
@section('content')
<style>
.color-table.success-table thead th {
    background-color: #00c292;
    color: #fff;
}
</style>
<div class="pagetitle">
    <h1>Add Recruiter</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Recruiters</a></li>
        {{-- <li class="breadcrumb-item">Permission</li> --}}
        <li class="breadcrumb-item active">Add Recruiter</li>
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
      <form  method="POST" action="{{route('add.recruiter')}}" enctype="multipart/form-data" >
        @csrf
        <div class="row" style="margin-top:30px;">
        <div class="col-md-3">
          <label for="college_id" class="form-label">Select College</label>
          <select class="form-select" name="cd_id" id ="college_id" aria-label="Default select example" required />
            <option> Select College Name </option>
            @foreach ($colleges as $college)
            <option value="{{$college->cd_id}}">{{$college->cd_name}}</option>
            @endforeach


          </select>
        </div>

        <div class="col-md-3">
          <label for="branch_id" class="form-label">Select Programme</label>
          <select class="form-select" name="prog_id" id ="branch_id" aria-label="Default select example" required />
            <option>Select Programme</option>
       


          </select>
        </div>

        <div class="col-md-2">
            <label for="recruiter_name" class="form-label" style="font-size:13px;">Recruiter Name</label>
            <input type="text" name="recruiter_name" id="recruiter_name" class="form-control" required />
          </div>

     

         
      <div class="col-md-2">
        <label for="recruiter_image_path" class="col-form-label">Upload Image</label>
        <input class="form-control dropify" name="recruiter_image_path" id="recruiter_image_path" type="file" required /><br/>
      </div>

      <div class="col-md-2">
        <label for="alt_tag" class="form-label" style="font-size:13px;">Alt Tag</label>
            <input type="text" name="alt_tag" id="alt_tag" class="form-control" required />
      </div>
{{-- 
          <div class="col-md-2">
            <label for="prog_duration_with_intersnhip" class="form-label" style="font-size:13px;">Duration + Internship</label>
            <input type="text" name="prog_duration_with_intersnhip" id="prog_duration_with_intersnhip" class="form-control" required />
          </div> --}}


    </div>

              

        <div class="row mt-3">
            <div class="col-md-3">
                <label for="display_university_main" class="form-label">University Page Visibility</label>
                <select class="form-select" name="display_university_main" id = "display_university_main" aria-label="Default select example" required>
                    <option>Select Visibility</option>
                    <option value="Y">Yes</option>
                    <option value="N">No</option>
                  </select>
                
              </div>


              <div class="col-md-3">
                <label for="display_college_main" class="form-label">College Page Visibility</label>
                <select class="form-select" name="display_college_main" id = "display_college_main" aria-label="Default select example" required>
                    <option>Select Visibility</option>
                    <option value="Y">Yes</option>
                    <option value="N">No</option>
                  </select>
                
              </div>


              <div class="col-md-3">
                <label for="display_programme_main" class="form-label">Programme Page Visibility</label>
                <select class="form-select" name="display_programme_main" id = "display_programme_main" aria-label="Default select example" required>
                    <option>Select Visibility</option>
                    <option value="Y">Yes</option>
                    <option value="N">No</option>
                  </select>
                
              </div>


              <div class="col-md-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" name="status" id = "status" aria-label="Default select example" required>
                    <option>Select Status</option>
                    <option value="Y">Yes</option>
                    <option value="N">No</option>
                  </select>
              </div>


</div> 

        <div class="text-center"><br/>
          <input type="submit" class="btn btn-primary" value="Add Recruiter"/>
      
        </div>
      </form><!-- End Multi Columns Form -->

    </div>
  </div>
</div>
</div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@endsection

