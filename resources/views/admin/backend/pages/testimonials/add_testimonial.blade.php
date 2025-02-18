@extends('layouts.adminlayout_new')
@section('content')
<style>
.color-table.success-table thead th {
    background-color: #00c292;
    color: #fff;
}
</style>
<div class="pagetitle">
    <h1>Add Testimonial</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Testimonials</a></li>
        {{-- <li class="breadcrumb-item">Permission</li> --}}
        <li class="breadcrumb-item active">Add Testimonial</li>
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
      <form  method="POST" action="{{route('add.testimonial')}}" enctype="multipart/form-data" >
        @csrf
        <div class="row" style="margin-top:30px;">
        <div class="col-md-3">
          <label for="college_id" class="form-label">Select College</label>
          <select class="form-select" name="cd_id" id ="college_id" aria-label="Default select example" required>
            <option> Select College Name </option>
            @foreach ($colleges as $college)
            <option value="{{$college->cd_id}}">{{$college->cd_name}}</option>
            @endforeach


          </select>
        </div>

        <div class="col-md-3">
          <label for="branch_id" class="form-label">Select Programme</label>
          <select class="form-select" name="prog_id" id ="branch_id" aria-label="Default select example" required>
            <option>Select Programme</option>
       


          </select>
        </div>
        <div class="col-md-3">
            <label for="story_type" class="form-label">Testimonial Type</label>
            <select class="form-select" id="story_type" name="story_type" aria-label="Default select example" required>
                <option>Story Type</option>
                <option value="Alumni">Alumni</option>
                <option value="Students">Student</option>
              </select>
          </div>

     

          <div class="col-md-3">
            <label for="testimonial_format_type" class="form-label">Story Format Type</label>
            <select class="form-select" id="testimonial_format_type" name="testimonial_format_type" aria-label="Default select example" required>
              <option>Story Format Type</option>
              <option value="VT">Video with Text</option>
              <option value="IT">Image with Text</option>
              <option value="VI">Video with Image</option>
              <option value="VIT">Video with Image and Text</option>
              
            </select>
          </div>
{{-- 
          <div class="col-md-2">
            <label for="prog_duration_with_intersnhip" class="form-label" style="font-size:13px;">Duration + Internship</label>
            <input type="text" name="prog_duration_with_intersnhip" id="prog_duration_with_intersnhip" class="form-control" required />
          </div> --}}


    </div>

      
<div class="row mt-3">

          <div class="col-md-3">
            <label for="student_name" class="form-label" style="font-size:13px;">Student Name</label>
            <input type="text" name="student_name" id="student_name" class="form-control" required />
          </div>

          <div class="col-md-3">
            <label for="admitted_year" class="form-label">Admitted Year</label>
            <select class="form-select" name="admitted_year" id = "admitted_year" aria-label="Default select example" required>
              <option>Select Admitted Year</option>
                        <option value="2028">2028</option>
              <option value="2027">2027</option>
              <option value="2026">2026</option>
              <option value="2025">2025</option>
              <option value="2024">2024</option>
              <option value="2023">2023</option>
              <option value="2022">2022</option>
              <option value="2021">2021</option>
              <option value="2020">2020</option>
              <option value="2019">2019</option>
              <option value="2018">2018</option>
              <option value="2017">2017</option>
              <option value="2016">2016</option>
              <option value="2015">2015</option>
              <option value="2014">2014</option>
              <option value="2013">2013</option>
              <option value="2012">2012</option>
              <option value="2011">2011</option>
              <option value="2010">2010</option>
            </select>
          </div>

          <div class="col-md-3">
            <label for="passout_year" class="form-label">Passout Year</label>
            <select class="form-select" name="passout_year" id = "passout_year" aria-label="Default select example" required>
                <option>Select Passout Year</option>
                        <option value="2028">2028</option>
              <option value="2027">2027</option>
              <option value="2026">2026</option>
              <option value="2025">2025</option>
                <option value="2024">2024</option>
                <option value="2023">2023</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
              </select>
            
          </div>
          
          <div class="col-md-3">
            <label for="currently_working_at" class="form-label" style="font-size:13px;">Currently Working At and As</label>
            <input type="text" name="currently_working_at" id="currently_working_at" class="form-control" required />
            <span style="color:red;">Enter na in case of no data</span>
          </div>

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
                <label for="display_programme_page" class="form-label">Programme Page Visibility</label>
                <select class="form-select" name="display_programme_page" id = "display_programme_page" aria-label="Default select example" required>
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



<div class="row mt-3">
  <div class="col-md-4">
      <label for="display_ctld_department" class="form-label">CTLD Dept Visibility</label>
      <select class="form-select" name="display_ctld_department" id = "display_ctld_department" aria-label="Default select example" required>
          <option>Select Visibility</option>
          <option value="Y">Yes</option>
          <option value="N">No</option>
        </select>
      
    </div>


    <div class="col-md-4">
      <label for="display_crc_department" class="form-label">CRC Dept Visibility</label>
      <select class="form-select" name="display_crc_department" id = "display_crc_department" aria-label="Default select example" required>
          <option>Select Visibility</option>
          <option value="Y">Yes</option>
          <option value="N">No</option>
        </select>
      
    </div>


    <div class="col-md-3">
      <label for="display_alumni_department" class="form-label">Alumni Dept Visibility</label>
      <select class="form-select" name="display_alumni_department" id = "display_alumni_department" aria-label="Default select example" required>
          <option>Select Visibility</option>
          <option value="Y">Yes</option>
          <option value="N">No</option>
        </select>
      
    </div>



  </div>
  
<div class="row mt-3">

    

    <div class="col-md-2">
        <label for="linkedin_url" class="form-label" style="font-size:13px;">Linked In Url</label>
        <input type="text" name="linkedin_url" id="linkedin_url" class="form-control" required />
        <span style="color:red;">Enter na in case of no data</span>
      </div>


    <div class="col-md-2" id="video-url-field" style="display:none;">
        <label for="video_path" class="form-label" style="font-size:13px;">Video Url</label>
        <input type="text" name="video_path" id="video_path" class="form-control" />
      </div>

      <div class="col-md-2" id="image-upload-field" style="display:none;">
        <label for="thumbnail_path" class="col-form-label">Upload Image</label>
        <input class="form-control dropify" name="thumbnail_path" id="thumbnail_path" type="file" ><br/>
      </div>

      <div class="col-md-6" id="text-area-field" style="display:none;">
        <label for="area" class="form-label">Full Text</label>
      <textarea rows="4" cols="50" name="area"  ></textarea><span class="highlight"></span> <span class="bar"></span>
      </div>

</div>
 


        <div class="text-center"><br/>
          <input type="submit" class="btn btn-primary" value="Add Testimonial"/>
      
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
    // Hide all fields initially
    $("#video-url-field, #image-upload-field, #text-area-field").hide();

    // Trigger change event when a selection is made
    $('#testimonial_format_type').on('change', function() {
        var selectedOption = $(this).val();

        // Hide all fields initially
        $("#video-url-field, #image-upload-field, #text-area-field").hide();

        // Show fields based on the selected option
        if (selectedOption === 'VT') {
            // Video with Text
            $("#video-url-field").show();
            $("#text-area-field").show();
        } else if (selectedOption === 'IT') {
            // Image with Text
            $("#image-upload-field").show();
            $("#text-area-field").show();
        } else if (selectedOption === 'VI') {
            // Image with Video
            $("#image-upload-field").show();
            $("#video-url-field").show();
        }else if (selectedOption === 'VIT') {
            // Video with Image and Text
            $("#video-url-field").show();
            $("#image-upload-field").show();
            $("#text-area-field").show();
        }
    });
});
</script>

@endsection

