@extends('layouts.adminlayout_new')
@section('content')
<style>
.color-table.success-table thead th {
    background-color: #00c292;
    color: #fff;
}
</style>
<div class="pagetitle">
    <h1>Add Naac Criterion</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Naac Criterions</a></li>
        {{-- <li class="breadcrumb-item">Permission</li> --}}
        <li class="breadcrumb-item active">Add Naac Criterion</li>
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
      <form  method="POST" action="{{route('add.naac_criterion')}}" enctype="multipart/form-data" >
        @csrf
        <div class="row" style="margin-top:30px;">
            <div class="col-md-6">
                <label for="page_url" class="form-label" style="font-size:13px;">Criterion Name</label>
                    <input type="text" name="criterion_name" id="criterion_name" class="form-control" required />
                    <div id="result" style="color:black;"></div>
              </div>

        <div class="col-md-6">
            <label for="criterion_description" class="form-label" style="font-size:13px;">Criterion Description</label>
            <input type="text" name="criterion_description" id="criterion_description" class="form-control" required />
        </div>



    </div>

              
<div class="row mt-3">

    <div class="col-md-6">
        <label for="criterion_status" class="form-label">Criterion Status</label>
        <select class="form-select" name="criterion_status" id = "criterion_status" aria-label="Default select example" required>
            <option>Criterion Status</option>
            <option value="Y">Yes</option>
            <option value="N">No</option>
          </select>
        
      </div>


      <div class="col-md-6">
        <label for="criterion_priority" class="col-form-label">Priority</label>
        <input class="form-control" type="number" name="criterion_priority" id="criterion_priority"  value="{{$priority}}" required />
      </div>


</div> 

        <div class="text-center"><br/>
          <input type="submit" class="btn btn-primary" value="Add Criterion" id="myButton"  />
      
        </div>
      </form><!-- End Multi Columns Form -->

    </div>
  </div>
</div>
</div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
      $('#page_url').on('keyup', function() {
          var value = $(this).val();
          
          $.ajax({
              type: 'POST',
              url: '{{ route("search_meta_slug") }}',
              data: { 
                  _token: '{{ csrf_token() }}', 
                  value: value 
              },
              dataType: 'json',
              success: function(data) {
                  console.log('Response:', data);
                  if (data.exists) {
                      $('#result').text('URL Already Exists.');
                      $('#myButton').hide();
                  } else {
                      $('#result').text('New URL');
                      $('#myButton').show();
                  }
              },
              error: function(xhr, status, error) {
        console.log(xhr.responseText);  // Log the response text to see the actual error message
        console.log('Status:', status);
        console.log('Error:', error);
    }
          });
      });
  });
</script>


@endsection

