@extends('layouts.adminlayout_new')
@section('content')
<style>
.color-table.success-table thead th {
    background-color: #00c292;
    color: #fff;
}
</style>

<div class="pagetitle">
    <h1>Edit Recruiter</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Recruiters</a></li>
        {{-- <li class="breadcrumb-item">Permission</li> --}}
        <li class="breadcrumb-item active">Edit Recruiter</li>
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
      <form  method="POST" action="{{ route('faq.edit', ['id' => $faq->faq_id]) }}" enctype="multipart/form-data" >
        @csrf
        <div class="row" style="margin-top:30px;">
        <div class="col-md-3">
          <label for="college_id" class="form-label">Select College</label>
          <select class="form-select" name="cd_id" id ="college_id" aria-label="Default select example" required>
            <option> Select College Name </option>
            @foreach ($colleges as $college)
            <option {{$faq->cd_id == $college->cd_id ? 'selected' : ''}} value="{{$college->cd_id}}">{{$college->cd_name}}</option>
            @endforeach


          </select>
     
        </div>

        <div class="col-md-3">
          <label for="branch_id" class="form-label">Select Programme</label>
          <select class="form-select" name="prog_id" id ="branch_id" aria-label="Default select example" required>
            <option>Select Programme</option>
<select>
        </div>
       
        <div class="col-md-6">
            <label for="faq_question" class="form-label" style="font-size:13px;">Question</label>
            <input type="text" name="faq_question" id="faq_question" value= "{{$faq->faq_question}}" class="form-control" required />
          </div>

     

         
    </div>

    <div class="row mt-3">
      <div class="col-md-12">
        <label for="area" class="form-label">Answer</label>
      <textarea rows="4" cols="50" name="area"  id="area" >{{$faq->faq_answer}}</textarea><span class="highlight"></span> <span class="bar"></span>
      </div>
    </div>              


        <div class="row mt-3">
            <div class="col-md-3">
                <label for="display_university_main" class="form-label">University Page Visibility</label>
                <select class="form-select" name="display_university_main" id = "display_university_main" aria-label="Default select example" required>
                    <option>Select Visibility</option>
                    <option {{$faq->display_university_main == 'Y' ? 'selected' : ''}} value="Y">Yes</option>
                    <option {{$faq->display_university_main == 'N' ? 'selected' : ''}} value="N">No</option>
                  </select>
                
              </div>


              <div class="col-md-3">
                <label for="display_college_main" class="form-label">College Page Visibility</label>
                <select class="form-select" name="display_college_main" id = "display_college_main" aria-label="Default select example" required>
                    <option>Select Visibility</option>
                    <option {{$faq->display_college_main == 'Y' ? 'selected' : ''}} value="Y">Yes</option>
                    <option {{$faq->display_college_main == 'N' ? 'selected' : ''}} value="N">No</option>
                  </select>
                
              </div>


              <div class="col-md-3">
                <label for="display_programme_main" class="form-label">Programme Page Visibility</label>
                <select class="form-select" name="display_programme_page" id = "display_programme_page" aria-label="Default select example" required>
                    <option>Select Visibility</option>
                    <option {{$faq->display_programme_page == 'Y' ? 'selected' : ''}}  value="Y">Yes</option>
                    <option {{$faq->display_programme_page == 'N' ? 'selected' : ''}} value="N">No</option>
                  </select>
                
              </div>


              <div class="col-md-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" name="status" id = "status" aria-label="Default select example" required>
                    <option>Select Status</option>
                    <option {{$faq->status == 'Y' ? 'selected' : ''}} value="Y">Yes</option>
                    <option {{$faq->status == 'N' ? 'selected' : ''}} value="N">No</option>
                  </select>
              </div>


</div> 

 


        <div class="text-center"><br/>
          <input type="submit" class="btn btn-primary" value="Update Faq"/>
      
        </div>
      </form><!-- End Multi Columns Form -->

    </div>
  </div>
</div>
</div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
//make ajax request function starts here
const prog_id = "<?php echo $faq->prog_id; ?>";
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
$('#branch_id').find('option').remove();
$.each(response1, function (index, data) {
$('#branch_id').append('<option value="' + data['prog_id'] + '"' + (prog_id == data['prog_id'] ? ' selected' : '') + '>' + data['prog_name'] + '</option>');
}); 

 const response2 = await makeAjaxRequest('{!! route("getmasterprogramme") !!}',{ _token: '{{ csrf_token() }}',cdID: -1});


  $.each(response2, function (index, data) {
                $('#branch_id').append('<option value="' + data['prog_id'] + '"' + (prog_id == data['prog_id'] ? ' selected' : '') + '>' + data['prog_name'] + '</option>');
            });


}catch (error) {
  console.error("Ajax error: " + error.responseText);
}

};


// function to autoload the master programme ends here.

</script>

@endsection

