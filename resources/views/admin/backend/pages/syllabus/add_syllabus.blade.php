@extends('layouts.adminlayout_new')
@section('content')
<style>
.color-table.success-table thead th {
    background-color: #00c292;
    color: #fff;
}
</style>
<div class="pagetitle">
    <h1>Add Syllabus</h1>
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
      <form  method="POST" action="{{route('add.syllabus')}}" enctype="multipart/form-data" >
        @csrf
        <div class="row" style="margin-top:30px;">
        <div class="col-md-4">
          <label for="college_id" class="form-label">Select College</label>
          <select class="form-select" name="cd_id" id ="college_id" aria-label="Default select example"  required />
            <option> Select College Name </option>
            @foreach ($colleges as $college)
            <option value="{{$college->cd_id}}">{{$college->cd_name}}</option>
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
        <input class="form-control dropify" name="file_path" id="file_path" type="file" required /><br/>
      </div>

    </div>

              

        <div class="row mt-3">
            <div class="col-md-4">
                <label for="acad_year" class="form-label">Academic Year</label>
                <select class="form-select" name="acad_year" id = "acad_year" aria-label="Default select example" required>
                    <option>Select Academic Year</option>
                     <option value="2027-28">2027-28</option>
                    <option value="2026-27">2026-27</option>
                    <option value="2025-26">2025-26</option>
                    <option value="2024-25">2024-25</option>
                    <option value="2023-24">2023-24</option>
                    <option value="2022-23">2022-23</option>
                    <option value="2021-22">2021-22</option>
                    <option value="2020-21">2020-21</option>
                    <option value="2019-20">2019-20</option>
                    <option value="2018-19">2018-19</option>
                          <option value="2017-18">2017-18</option>
                    <option value="2016-17">2016-17</option>
                          <option value="2015-16">2015-16</option>
                    <option value="2014-15">2014-15</option>
                          <option value="2013-14">2013-14</option>
                    <option value="2012-13">2012-13</option>
                  </select>
                
              </div>


              <div class="col-md-4">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" name="status" id = "status" aria-label="Default select example" required>
                    <option>Select Status</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                  </select>
              </div>


</div> 

        <div class="text-center"><br/>
          <input type="submit" class="btn btn-primary" value="Add Syllabus"/>
      
        </div>
      </form><!-- End Multi Columns Form -->

    </div>
  </div>
</div>
</div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@endsection

