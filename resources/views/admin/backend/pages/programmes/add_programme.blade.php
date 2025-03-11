@extends('layouts.adminlayout_new')
@section('content')
<style>
.color-table.success-table thead th {
    background-color: #00c292;
    color: #fff;
}
</style>
<div class="pagetitle">
    <h1>Add Programme</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Programme</a></li>
        {{-- <li class="breadcrumb-item">Permission</li> --}}
        <li class="breadcrumb-item active">Add Programme</li>
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
      <form  method="POST" action="{{route('add.programme')}}" enctype="multipart/form-data" >
        @csrf
        <div class="row" style="margin-top:30px;">
        <div class="col-md-2">
          <label for="college_id" class="form-label">Select College</label>
          <select class="form-select" name="cd_id" id ="college_id" aria-label="Default select example" required>
            <option> Select College Name </option>
            @foreach ($colleges as $college)
            <option value="{{$college->cd_id}}">{{$college->cd_name}}</option>
            @endforeach


          </select>
        </div>

        <div class="col-md-2">
          <label for="branch_id" class="form-label">Master Programme</label>
          <select class="form-select" name="branch_id" id ="branch_id" aria-label="Default select example" required>
            <option>Master Programme</option>
       


          </select>
        </div>
        <div class="col-md-2">
            <label for="prog_name" class="form-label">Programme Name</label>
            <input type="text" name="prog_name" id="prog_name" class="form-control" required />
          </div>

          <div class="col-md-2">
            <label for="prog_code" class="form-label">Programme Code</label>
            <input type="text" name="prog_code" id="prog_code" class="form-control" required />
          </div>

          <div class="col-md-2">
            <label for="programme_level" class="form-label">Programme Level</label>
            <select class="form-select" id="programme_level" name="programme_level" aria-label="Default select example" required>
              <option>Programme Level</option>
              <option value="Certificate">Certificate</option>
              <option value="Diploma">Diploma</option>
              <option value="UG">Under Graduate</option>
              <option value="PG">Post Graduate</option>
              <option value="Doctoral">Doctoral</option>
  
            </select>
          </div>

          <div class="col-md-2">
            <label for="prog_duration_with_intersnhip" class="form-label" style="font-size:13px;">Duration (Internship)</label>
            <input type="text" name="prog_duration_with_intersnhip" id="prog_duration_with_intersnhip" class="form-control" required />
          </div>


    </div>

      
<div class="row mt-3">
          {{-- <div class="col-md-3">
            <label for="ti_path" class="col-form-label">Title Image</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control dropify" name="ti_path" id="ti_path"  required />
                  </div>
          </div> --}}

          <div class="col-md-2">
            <label for="prog_duration_without_intersnhip" class="form-label" style="font-size:13px;">Duration (Regular)</label>
            <input type="text" name="prog_duration_without_intersnhip" id="prog_duration_without_intersnhip" class="form-control" required />
          </div>

          <div class="col-md-2">
            <label for="prog_duration_type_without_internship" class="form-label">Duration Type (Without Intersnhip)</label>
            <select class="form-select" name="prog_duration_type_without_internship" id = "prog_duration_type_without_internship" aria-label="Default select example" required>
              <option>Select Duration Type</option>
              <option value="Years">Years</option>
              <option value="Months">Months</option>
            </select>
          </div>

          <div class="col-md-2">
            <label for="prog_duration_type_with_internship" class="form-label">Duration Type(Internship)</label>
            <select class="form-select" name="prog_duration_type_with_internship" id = "prog_duration_type_with_internship" aria-label="Default select example" required>
              <option>Select Duration Type</option>
              <option value="Years">Years</option>
              <option value="Months">Months</option>
            </select>
          </div>

          <div class="col-md-2">
            <label for="intake" class="form-label">Intake</label>
            <input type="text" name="intake" id="intake" class="form-control" required />
            
          </div>

          <div class="col-md-2">
            <label for="medium" class="form-label">Instruction Medium</label>
            <select class="form-select" id="medium" name="medium" aria-label="Default select example" required>
              <option>Instruction Medium</option>
              <option value="English">English</option>
              <option value="Hindi">Hindi</option>
            </select>
          </div>

          <div class="col-md-2">
            <label for="eligibility" class="form-label">ELigibility</label>
            <input type="text" id="eligibility" name="eligibility" class="form-control" required />
            
          </div>


        </div>        

        <div class="row mt-3">
<div class="col-md-6">
  <label for="criteria_merit" class="form-label">Criteria of Merit</label>
  <textarea class="form-control" id="criteria_merit" name="criteria_merit" rows="4"></textarea>
</div>
<div class="col-md-6">
  <label for="area" class="form-label">About Programme</label>
  <textarea class="form-control" id="area" name="area" rows="4"></textarea>
</div>
</div>

{{-- <div class="row mt-3">
  <div class="col-md-6">
    <label for="scope" class="form-label">Scope</label>
    <textarea class="form-control" id="scope" name="scope" rows="4"></textarea>
  </div>
  <div class="col-md-3">
    <label for="additional_information" class="form-label">Additional Information</label>
    <textarea class="form-control" id="additional_information" name="additional_information" rows="4"></textarea>
  </div>

  <div class="col-md-3">
    <label for="page_slug" class="form-label">Page Slug</label>
    <textarea class="form-control" id="page_slug" name="page_slug" rows="4"></textarea>
  </div>
  </div> --}}



  <div class="row mt-3">
    <div class="col-md-6">
      <label for="scope" class="form-label">Scope</label>
      <textarea class="form-control" id="scope" name="scope" rows="4"></textarea>
    </div>
    <div class="col-md-3">
      <label for="additional_information" class="form-label">Additional Information</label>
      <textarea class="form-control" id="additional_information" name="additional_information" rows="4"></textarea>
    </div>
  
    <div class="col-md-3">
      <label for="page_slug" class="form-label">Page Slug</label>
      <textarea class="form-control" id="page_slug" name="page_slug" rows="4"></textarea>
    </div>
    </div>


    <div class="row mt-3">
      <div class="col-md-3">
        <label for="usp_section_code" class="form-label">USP Code</label>
        <textarea class="form-control" id="usp_section_code" name="usp_section_code" rows="4"></textarea>
      </div>
      <div class="col-md-3">
        <label for="video_url" class="form-label">Video URL</label>
        <textarea class="form-control" id="video_url" name="video_url" rows="4"></textarea>
      </div>
    
      <div class="col-md-2">
        <label for="usp_section_flag" class="form-label">About Section</label>
        <select class="form-select" id="usp_section_flag" name="usp_section_flag" aria-label="Default select example" required>
          <option>Select Status</option>
        	<option value="Y">Enable</option>
									<option value="N">Disable</option>
        </select>
      </div>


      <div class="col-md-2">
        <label for="video_section_flag" class="form-label">Banner Section</label>
        <select class="form-select" id="video_section_flag" name="video_section_flag" aria-label="Default select example" required>
          <option></option>
          <option value="Y">Enable</option>
          <option value="N">Disable</option>
        </select>
      </div>

      <div class="col-md-2">
        <label for="success_stories_section_flag" class="form-label">Testimonial Section</label>
        <select class="form-select" id="success_stories_section_flag" name="success_stories_section_flag" aria-label="Default select example" required>
          <option></option>
        	<option value="Y">Enable</option>
									<option value="N">Disable</option>
        </select>
      </div>


      </div>


      <div class="row mt-3">
              <div class="col-md-2">
        <label for="apply_now_button_flag" class="form-label">Apply Now Button</label>
        <select class="form-select" id="apply_now_button_flag" name="apply_now_button_flag" aria-label="Default select example" required>
          <option></option>
          <option value="Y">Enable</option>
          <option value="N">Disable</option>
        </select>
      </div>
      
      <div class="col-md-2">
        <label for="our_recruiters_section_flag" class="form-label">Recruiters Section</label>
        <select class="form-select" id="our_recruiters_section_flag" name="our_recruiters_section_flag" aria-label="Default select example" required>
          <option></option>
        	<option value="Y">Enable</option>
									<option value="N">Disable</option>
        </select>
      </div>


      <div class="col-md-2">
        <label for="fee_structure_section_flag" class="form-label">Fee Structure Section</label>
        <select class="form-select" id="fee_structure_section_flag" name="fee_structure_section_flag" aria-label="Default select example" required>
          <option></option>
          <option value="Y">Enable</option>
          <option value="N">Disable</option>
        </select>
      </div>

      <div class="col-md-2">
        <label for="scholarship_section_flag" class="form-label">Scholarship Section</label>
        <select class="form-select" id="scholarship_section_flag" name="scholarship_section_flag" aria-label="Default select example" required>
          <option></option>
        	<option value="Y">Enable</option>
									<option value="N">Disable</option>
        </select>
      </div>

      <div class="col-md-2">
        <label for="eligibility_section_flag" class="form-label">Eligibility Section</label>
        <select class="form-select" id="eligibility_section_flag" name="eligibility_section_flag" aria-label="Default select example" required>
          <option></option>
          <option value="Y">Enable</option>
          <option value="N">Disable</option>
        </select>
      </div>

      <div class="col-md-2">
        <label for="faq_section_flag" class="form-label">FAQ Section</label>
        <select class="form-select" id="faq_section_flag" name="faq_section_flag" aria-label="Default select example" required>
          <option></option>
        	<option value="Y">Enable</option>
									<option value="N">Disable</option>
        </select>
      </div>

      </div>

    
{{-- <div class="row mt-3">
  <div class="col-md-12">
    <label for="area" class="form-label">Full News</label>
  <textarea rows="4" cols="50" name="area"  id="area" ></textarea><span class="highlight"></span> <span class="bar"></span>
  </div>
</div> --}}



    <div class="row mt-3">
      <div class="col-md-12">
        <div class="form-group">
          <div class="table-responsive">
            <table class="table color-table success-table" id="dynamic_field">
              <thead>
                <tr>
                
                  <th style="width:22%">Description</th>
                  <th style="width:22%">Payment Schedule</th>
                  <th style="width:25%">Amount</th>
                  <th style="width:15%">Status</th>
              
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
          
                  <td><input type="text" name="fee_description[]" class="form-control name_list"></td>
                  <td>
                    <select class="form-control designation_list" name="fee_payment_schedule[]">
                         <option>Payment Schedule</option>
                      <option value="Semester">Semester</option>
                      <option value="Year">Year</option>
                        <option value="One Time">One Time</option>
                    
                    </select>
                  </td>
                  <td><input type="text" name="fee_amount[]" class="form-control name_list"></td>
                    <td>
                    <select class="form-control designation_list" name="fee_status[]">
                        <option>Select Status</option>
                      <option value="Y">Enable</option>
                      <option value="N">Disbale</option>
                    
                    </select>
                  </td>										
                  <td><button type="button" name="add" id="add" class="btn btn-success">+</button></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>							
    </div>	


    <div class="row mt-3">

      <div class="col-md-3">
        <label for="scholarship_scheme" class="form-label">Scholarship Scheme</label>
        <textarea class="form-control" id="scholarship_scheme" name="scholarship_scheme" rows="4"></textarea>
      </div>

      <div class="col-md-3">
        <label for="programme_image_path" class="col-form-label">Programme Image</label>
                <input class="form-control dropify" name="programme_image_path" id="programme_image_path" type="file" required />
                <br/>
                {{-- <input class="form-control" name="programme_image_alt_tag" id="programme_image_alt_tag" type="text" placeholder="Alt Tag" required /> --}}
      </div>

      <div class="col-md-3">
        <label for="programme_banner_path" class="col-form-label">Programme Banner Desktop / Laptop</label>
                <input class="form-control dropify" name="programme_banner_path" id="programme_banner_path" type="file" ><br/>
                {{-- <input class="form-control" name="programme_banner_alt_tag" id="programme_banner_alt_tag" type="text" placeholder="Alt Tag"> --}}
      </div>

      <div class="col-md-3">
        <label for="ei3_full_path" class="col-form-label">Programme Banner Mobile</label>
                <input class="form-control dropify" name="programme_brochure_path" id="programme_brochure_path" type="file" >
                <br/>
                {{-- <input class="form-control" name="programme_brochure_alt_tag" id="programme_brochure_alt_tag" type="text" placeholder="Alt Tag"> --}}
      </div>
      
    

        </div>


        <div class="row mt-3">
          <div class="col-md-4">
        <label for="programme_by_qualification" class="form-label">Programme By Qualification</label>
        <select class="form-select" id="programme_by_qualification" name="programme_by_qualification" aria-label="Default select example" required>
          <option>Porgramme By Qualification</option>
          <option value="After 10th-Diploma">After 10th (Diploma)</option>
          <option value="After 12th-Diploma">After 12th (Diploma)</option>
          <option value="After Diploma or Certificate">After Diploma or Certificate</option>
          <option value="After 12th-UG">After 12th (UG)</option>
          <option value="After Graduation-PG Diploma">After Graduation (PG Diploma)</option>
          <option value="After Graduation-PG">After Graduation (PG)</option>
          <option value="After Post Graduation-Ph.D.">After Post Graduation (Ph.D.)</option>
        </select>
      </div>
    
      <div class="col-md-4">
        <label for="programme_by_discipline" class="form-label">Programme By Discipline</label>
        <select class="form-select" id="programme_by_discipline" name="programme_by_discipline" aria-label="Default select example" required>
          <option>Porgramme By Discipline</option>
          <option value="Medical">Medical</option>
          <option value="Dental">Dental</option>
          <option value="Nursing">Nursing</option>
          <option value="Pharmacy">Pharmacy</option>
          <option value="Allied Health Sciences">Allied Health Sciences</option>
          <option value="Management">Management</option>
          <option value="Engineering">Engineering</option>
          <option value="Basic Sciences">Basic Sciences</option>
          <option value="Law">Law</option>
          <option value="Education">Education</option>
          <option value="Journalism">Journalism & Mass Comm.</option>
          <option value="Fine Arts">Fine Arts</option>
          <option value="Humanities & Social Sciences">Humanities & Social Sciences</option>
          <option value="Commerce">Commerce</option>
          <option value="Agriculture Sciences">Agriculture Sciences</option>
        </select>
      </div>

      <div class="col-md-4">
        <label for="programme_by_discipline" class="form-label">Programme By Category</label>
        <select class="form-select" id="programme_by_category" name="programme_by_category" aria-label="Default select example" required>
          <option>Porgramme By Category</option>
          <option value="Regular Programme">Regular Programmes</option>
          <option value="Lateral Entry Programme">Lateral Entry Programme</option>
          <option value="Dual Degree Programme">Dual Degree Programme</option>
          <option value="Certificate / Diploma Programme">Certificate / Diploma Programme</option>
          <option value="Collaborative Programme">Collaborative Programme</option>
          <option value="Short Term Programmes">Short Term Programmes</option>	
        </select>
      </div>
 </div>

 <div class="row mt-3">
  
  <div class="col-md-6">
    <label for="study_material_flag" class="form-label">Study Material Required</label>
    <select class="form-select" id="study_material_flag" name="study_material_flag" aria-label="Default select example" required>
      <option>Select Study Material Status</option>
      <option value="Y">Enable</option>
      <option value="N">Disable</option>
    </select>
  </div>

  <div class="col-md-6">
    <label for="study_material_flag" class="form-label">Syllabus Required</label>
    <select class="form-select" id="syllabus_flag" name="syllabus_flag" aria-label="Default select example" required>
  		<option>Select Syllabus Status</option>
									<option value="Y">Enable</option>
									<option value="N">Disable</option>
    </select>
  </div>



 </div>

 
       
        <div class="text-center"><br/>
          <input type="submit" class="btn btn-primary" value="Create Programme"/>
      
        </div>
      </form><!-- End Multi Columns Form -->

    </div>
  </div>
</div>
</div>
</section>

<script>
    window.onload = async function (){
  
  try{
     var i = 1;
     $('#add').click(function () {
            i++;
            $('#dynamic_field').append('<tr id="row' + i + '" class="dynamic-added"><td><input type="hidden" name="fee_id[]" value="-1" class="form-control slno_list" required /><input type="text" name="fee_description[]" class="form-control slno_list" required /></td><td><select class="form-control designation_list" name="fee_payment_schedule[]"><option>Payment Schedule</option><option value="Semester">Semester</option><option value="Year">Year</option><option value="One Time">One Time</option></select></td><td><input type="text" name="fee_amount[]" class="form-control contact_list" required></td><td><select class="form-control designation_list" name="fee_status[]"><option>Select Status</option><option value="Y">Enable</option><option value="N">Disable</option></select></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
        });
        $(document).on('click', '.btn_remove', function () {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });

      }catch (error) {
    console.error("Ajax error: " + error.responseText);
  }
  
  };

</script>
@endsection

