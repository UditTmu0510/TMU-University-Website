@extends('layouts.adminlayout_new')
@section('content')
<style>
.color-table.success-table thead th {
    background-color: #00c292;
    color: #fff;
}
</style>
<div class="pagetitle">
    <h1>Add Metric</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Metric</a></li>
        {{-- <li class="breadcrumb-item">Permission</li> --}}
        <li class="breadcrumb-item active">Add Metric</li>
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
      <form  method="POST" action="{{route('add.naac_metric')}}" enctype="multipart/form-data" >
        @csrf
        <div class="row" style="margin-top:30px;">

            <div class="col-md-3">
                <label for="criterion_id" class="form-label">Select Criterion</label>
                <select class="form-select" name="criterion_id" id = "criterion_id" aria-label="Default select example" required>
                    <option>Select Criterion</option>
                @foreach($criterions as $criterion)
<option value="{{$criterion->criterion_id}}">{{$criterion->criterion_name}}</option>
                @endforeach
                  </select>
                
              </div>


            <div class="col-md-3">
                <label for="key_indicator_id" class="form-label">Select KeyIndicator</label>
                <select class="form-select" name="key_indicator_id" id = "key_indicator_id" aria-label="Default select example" required>
                    <option>Select KeyIndicator</option>
                  </select>
              </div>

              <div class="col-md-3">
                <label for="metric_name" class="form-label" style="font-size:13px;">Metric Name</label>
                <input type="text" name="metric_name" id="metric_name" class="form-control" required />
            </div>

        <div class="col-md-3">
            <label for="metric_description" class="form-label" style="font-size:13px;">Metric Description</label>
            <input type="text" name="metric_description" id="metric_description" class="form-control" required />
        </div>



    </div>

              
<div class="row mt-3">

    <div class="col-md-6">
        <label for="metric_status" class="form-label">Metric Status</label>
        <select class="form-select" name="metric_status" id = "metric_status" aria-label="Default select example" required>
            <option>Metric Status</option>
            <option value="Y">Yes</option>
            <option value="N">No</option>
          </select>
        
      </div>


      <div class="col-md-6"> 
        <label for="metric_priority" class="col-form-label">Metric Priority</label>
        <input class="form-control" type="number" name="metric_priority" id="metric_priority"  value="{{$priority}}" required />
      </div>


</div> 

        <div class="text-center"><br/>
          <input type="submit" class="btn btn-primary" value="Add Metric" id="myButton"  />
      
        </div>
      </form><!-- End Multi Columns Form -->

    </div>
  </div>
</div>
</div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>

  
  // Function to make an AJAX request and return a Promise
  function makeAjaxRequest(url, data) {
      return new Promise(function (resolve, reject) {
          $.ajax({
              url: url,
              method: 'POST',
              data: data,
              dataType: 'json',
              success: resolve,
              error: function (jqXHR) {
                  reject(jqXHR.responseText || "Unknown error");
              }
          });
      });
  }
  
  // Function to populate the key indicator dropdown
  function populateKeyIndicators(criterionID, keyIndicatorSelect) {
      makeAjaxRequest('{!! route("getkeyindicator") !!}', {
          _token: '{{ csrf_token() }}',
          criterionID: criterionID
      }).then(response => {
          // Clear existing options
          keyIndicatorSelect.find('option').remove();
  
          // Populate the dropdown with new data
          $.each(response, function (index, data) {
              keyIndicatorSelect.append(
                  '<option value="' + data['key_indicator_id'] + '"' +
                  '>' + data['key_indicator_name'] + '</option>'
              );
          });
      }).catch(error => {
          console.error("AJAX Error: ", error);
          alert("Something went wrong. Please try again later.");
      });
  }
  
  // Trigger AJAX on dropdown change
  $('#criterion_id').change(function () {
      const criterionID = $(this).val();
      const keyIndicatorSelect = $('#key_indicator_id');
  
      alert('Criterion Id = ' + criterionID);
  
      populateKeyIndicators(criterionID, keyIndicatorSelect);
  });
  

   
  
  </script>


@endsection

