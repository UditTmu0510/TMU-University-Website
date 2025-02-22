@extends('layouts.adminlayout_new')
@section('content')
<style>
.color-table.success-table thead th {
    background-color: #00c292;
    color: #fff;
}
</style>
<div class="pagetitle">
    <h1>Add PDF</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">PDF's</a></li>
        {{-- <li class="breadcrumb-item">Permission</li> --}}
        <li class="breadcrumb-item active">Add PDF</li>
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
      <form  method="POST" action="{{route('add.naac_pdf')}}" enctype="multipart/form-data" >
        @csrf
        <div class="row" style="margin-top:30px;">

            <div class="col-md-3">
                <label for="criterion_id" class="form-label">Select Criterion</label>
                <select class="form-select" name="criterion_id" id = "criterion_id" aria-label="Default select example" required>
                    <option>Select Criterion</option>
                @foreach($criterions as $criterion)
                @if((Auth::user()->can('Criterion-I-Coordinator')) && ($criterion->criterion_name == "Criterion-I"))
<option value="{{$criterion->criterion_id}}">{{$criterion->criterion_name}}</option>
                @endif
                @if((Auth::user()->can('Criterion-II-Coordinator')) && ($criterion->criterion_name == "Criterion-II"))
                <option value="{{$criterion->criterion_id}}">{{$criterion->criterion_name}}</option>
                                @endif
                                @if((Auth::user()->can('Criterion-III-Coordinator')) && ($criterion->criterion_name == "Criterion-III"))
                                <option value="{{$criterion->criterion_id}}">{{$criterion->criterion_name}}</option>
                                                @endif

                                                @if((Auth::user()->can('Criterion-IV-Coordinator')) && ($criterion->criterion_name == "Criterion-IV"))
                                                <option value="{{$criterion->criterion_id}}">{{$criterion->criterion_name}}</option>
                                                                @endif

                                                                @if((Auth::user()->can('Criterion-V-Coordinator')) && ($criterion->criterion_name == "Criterion-V"))
                                                                <option value="{{$criterion->criterion_id}}">{{$criterion->criterion_name}}</option>
                                                                                @endif
                                                                                @if((Auth::user()->can('Criterion-VI-Coordinator')) && ($criterion->criterion_name == "Criterion-VI"))
                                                                                <option value="{{$criterion->criterion_id}}">{{$criterion->criterion_name}}</option>
                                                                                                @endif

                                                                                                @if((Auth::user()->can('Criterion-VII-Coordinator')) &&  ($criterion->criterion_name == "Criterion-VII"))
                                                                                                <option value="{{$criterion->criterion_id}}">{{$criterion->criterion_name}}</option>
                                                                                                                @endif

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
                <label for="metric_id" class="form-label">Select Metric</label>
                <select class="form-select" name="metric_id" id = "metric_id" aria-label="Default select example" required>
                    <option>Select Metric</option>
                  </select>
              </div>

        <div class="col-md-3">
            <label for="metric_description" class="form-label" style="font-size:13px;">PDF Description</label>
            <input type="text" name="pdf_description" id="pdf_description" class="form-control" required />
        </div>



    </div>

              
<div class="row mt-3">

    <div class="col-md-4">
        <label for="pdf_status" class="form-label">PDF Status</label>
        <select class="form-select" name="pdf_status" id = "pdf_status" aria-label="Default select example" required>
            <option>PDF Status</option>
            <option value="Y">Yes</option>
            <option value="N">No</option>
          </select>
        
      </div>


      <div class="col-md-4"> 
        <label for="pdf_priority" class="col-form-label">PDF Priority</label>
        <input class="form-control" type="number" name="pdf_priority" id="pdf_priority"  value="{{$priority}}" required />
      </div>


      <div class="col-md-4"> 
        <label for="file_path" class="col-form-label">Upload PDF</label>
        <input class="form-control" type="file" name="file_path" id="file_path" accept=".pdf" required />

      </div>


</div> 

        <div class="text-center"><br/>
          <input type="submit" class="btn btn-primary" value="Add PDF" id="myButton"  />
      
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

      makeAjaxRequest('{!! route("getkeyindicatorpdf") !!}', {
          _token: '{{ csrf_token() }}',
          criterionID: criterionID
      }).then(response => {
          // Clear existing options
        
    keyIndicatorSelect.find('option').remove();
          keyIndicatorSelect.append(
                  '<option value=" "' +
                  '> Select Key Indicator</option>'
              );

              $('#metric_id').find('option').remove();
          $('#metric_id').append(
                  '<option value=" "' +
                  '> Select Metric</option>'
              );
        
          // Populate the dropdown with new data
          $.each(response, function (index, data) {
              keyIndicatorSelect.append(
                  '<option value="' + data['key_indicator_id'] + '"' +
                  '>' + data['key_indicator_name'] + '</option>'
              );
          });
      }).catch(error => {


    keyIndicatorSelect.find('option').remove();
          keyIndicatorSelect.append(
                  '<option value=" "' +
                  '> No Key Indicator Present</option>'
              );

              $('#metric_id').find('option').remove();
          $('#metric_id').append(
                  '<option value=" "' +
                  '>No Metric Present</option>'
              );
          console.error("AJAX Error: ", error);
          alert("Something went wrong. Please try again later.");
      });
  }


  function populateMetrics(keyindicatorID,metricSelect) {




      makeAjaxRequest('{!! route("getmetricspdf") !!}', {
          _token: '{{ csrf_token() }}',
          keyindicatorID: keyindicatorID
      }).then(response => {
              // Clear existing options
              metricSelect.find('option').remove();
  
  // Populate the dropdown with new data
  metricSelect.append(
          '<option value=" "' +
          '> Select Metric</option>'
      );
          $.each(response, function (index, data) {
            metricSelect.append(
                  '<option value="' + data['metric_id'] + '"' +
                  '>' + data['metric_name'] + '</option>'
              );
          });
      }).catch(error => {

               // Clear existing options
       metricSelect.find('option').remove();
  
  // Populate the dropdown with new data
  metricSelect.append(
          '<option value=" "' +
          '> No Metric Present</option>'
      );
          console.error("AJAX Error: ", error);
          alert("Something went wrong.Data not present");
      });
  }
  
  // Trigger AJAX on dropdown change
  $('#criterion_id').change(function () {
      const criterionID = $(this).val();
      const keyIndicatorSelect = $('#key_indicator_id');
 
  
      populateKeyIndicators(criterionID, keyIndicatorSelect);
  });

  $('#key_indicator_id').change(function () {
      const keyindicatorID = $(this).val();
      const metricSelect = $('#metric_id');
  
  
      populateMetrics(keyindicatorID,metricSelect);
  });
  

   
  
  </script>


@endsection

