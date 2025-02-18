@extends('layouts.adminlayout_new')
@section('content')
<style>
.color-table.success-table thead th {
    background-color: #00c292;
    color: #fff;
}
</style>
<div class="pagetitle">
    <h1>Edit PDF</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">PDF's</a></li>
        {{-- <li class="breadcrumb-item">Permission</li> --}}
        <li class="breadcrumb-item active">Edit PDF</li>
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
      <form  method="POST" action="{{route('naac_pdf.edit',['id' => $naac_pdf->pdf_id])}}" enctype="multipart/form-data" >
        @csrf
        <div class="row" style="margin-top:30px;">

            <div class="col-md-3">
                <label for="criterion_id" class="form-label">Select Criterion</label>
                <select class="form-select" name="criterion_id" id = "criterion_id" aria-label="Default select example" required>
                    <option>Select Criterion</option>
                @foreach($criterions as $criterion)
<option {{$naac_pdf->criterion_id == $criterion->criterion_id ? 'selected' : ''}} value="{{$criterion->criterion_id}}">{{$criterion->criterion_name}}</option>
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
            <input type="text" name="pdf_description" id="pdf_description" class="form-control" value="{{$naac_pdf->pdf_description}}" required />
            <input type="hidden" name="pdf_id" id="pdf_id" value="{{$naac_pdf->pdf_id}}" required />
        </div>



    </div>

              
<div class="row mt-3">

    <div class="col-md-4">
        <label for="pdf_status" class="form-label">PDF Status</label>
        <select class="form-select" name="pdf_status" id = "pdf_status" aria-label="Default select example" required>
            <option>PDF Status</option>
            <option {{$naac_pdf->pdf_status == 'Y' ? 'selected' : ' '}} value="Y">Yes</option>
            <option {{$naac_pdf->pdf_status == 'N' ? 'selected' : ' '}} value="N">No</option>
          </select>
        
      </div>


      <div class="col-md-4"> 
        <label for="pdf_priority" class="col-form-label">PDF Priority</label>
        <input class="form-control" type="number" name="pdf_priority" id="pdf_priority"  value="{{$naac_pdf->pdf_priority}}" required />

        <input class="form-control" type="hidden" name="directory_path_value" id="directory_path_value"  value="{{$naac_pdf->directory_path}}" required />
        <input class="form-control" type="hidden" name="file_name_value" id="file_name_value"  value="{{$naac_pdf->file_name}}" required />
        <input class="form-control" type="hidden" name="file_path_value" id="file_path_value"  value="{{$naac_pdf->file_path}}" required />
      </div>


      <div class="col-md-4">
        <label for="file_path" class="col-form-label">Syllabus File</label>
        @if(empty($naac_pdf->file_path))
        <input class="form-control dropify" name="file_path" id="file_path" type="file" /><br/>
        @else
        <input class="form-control dropify" name="file_path" id="file_path" type="file" data-default-file="{{asset($naac_pdf->file_path)}}" /><br/>
        @endif
    </div>


</div> 

        <div class="text-center"><br/>
          <input type="submit" class="btn btn-primary" value="Update PDF" id="myButton"  />
      
        </div>
      </form><!-- End Multi Columns Form -->

    </div>
  </div>
</div>
</div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropify/0.2.2/js/dropify.min.js"></script>
<script>
<?php if (isset($naac_pdf->key_indicator_id)): ?>
const key_indicator_id_new = "<?php echo $naac_pdf->key_indicator_id; ?>";
const metric_id_new = "<?php echo $naac_pdf->metric_id; ?>";
<?php endif; ?>

// Function to make an AJAX request and return a Promise
function makeAjaxRequest(url, data) {
    return new Promise((resolve, reject) => {
        $.ajax({
            url: url,
            method: 'POST',
            data: data,
            dataType: 'json',
            success: resolve,
            error: (jqXHR) => reject(jqXHR.responseText || "Unknown error")
        });
    });
}

// Function to populate the key indicator dropdown
function populateKeyIndicators(criterionID, keyIndicatorSelect) {
    return makeAjaxRequest('{!! route("getkeyindicatorpdf") !!}', {
        _token: '{{ csrf_token() }}',
        criterionID: criterionID
    }).then(response => {
        keyIndicatorSelect.empty();
        keyIndicatorSelect.append('<option value="">Select Key Indicator</option>');

        $('#metric_id').empty();
        $('#metric_id').append('<option value="">Select Metric</option>');

        response.forEach(data => {
            keyIndicatorSelect.append(
                `<option value="${data.key_indicator_id}" 
                    ${key_indicator_id_new == data.key_indicator_id ? 'selected' : ''}>
                    ${data.key_indicator_name}
                </option>`
            );
        });

        return keyIndicatorSelect.val(); // Return the selected key indicator ID
    }).catch(error => {
        keyIndicatorSelect.empty().append('<option value="">No Key Indicator Present</option>');
        $('#metric_id').empty().append('<option value="">No Metric Present</option>');
        console.error("AJAX Error: ", error);
        alert("Something went wrong. Please try again later.");
        return null;
    });
}

// Function to populate the metrics dropdown
function populateMetrics(keyindicatorID, metricSelect) {
    return makeAjaxRequest('{!! route("getmetricspdf") !!}', {
        _token: '{{ csrf_token() }}',
        keyindicatorID: keyindicatorID
    }).then(response => {
        metricSelect.empty();
        metricSelect.append('<option value="">Select Metric</option>');

        response.forEach(data => {
            metricSelect.append(
                `<option value="${data.metric_id}" 
                    ${metric_id_new == data.metric_id ? 'selected' : ''}>
                    ${data.metric_name}
                </option>`
            );
        });
    }).catch(error => {
        metricSelect.empty().append('<option value="">No Metric Present</option>');
        console.error("AJAX Error: ", error);
        alert("Something went wrong. Data not present.");
    });
}

// Trigger AJAX on dropdown change
$('#criterion_id').change(function () {
    const criterionID = $(this).val();
    const keyIndicatorSelect = $('#key_indicator_id');
    const metricSelect = $('#metric_id');

    if (criterionID) {
        populateKeyIndicators(criterionID, keyIndicatorSelect).then(keyindicatorID => {
            if (keyindicatorID) {
                populateMetrics(keyindicatorID, metricSelect);
            }
        });
    } else {
        keyIndicatorSelect.empty().append('<option value="">Select Key Indicator</option>');
        metricSelect.empty().append('<option value="">Select Metric</option>');
    }
});

$('#key_indicator_id').change(function () {
    const keyindicatorID = $(this).val();
    const metricSelect = $('#metric_id');

    if (keyindicatorID) {
        populateMetrics(keyindicatorID, metricSelect);
    } else {
        metricSelect.empty().append('<option value="">Select Metric</option>');
    }
});

// On page load, populate dropdowns if values exist
window.onload = function () {
    const criterionID = $("#criterion_id").val();
    const keyIndicatorSelect = $('#key_indicator_id');
    const metricSelect = $('#metric_id');
    $('.dropify').dropify();
    if (criterionID) {
        populateKeyIndicators(criterionID, keyIndicatorSelect).then(keyindicatorID => {
            if (keyindicatorID) {
                populateMetrics(keyindicatorID, metricSelect);
            }
        });
    }
};


   
  
  </script>


@endsection

