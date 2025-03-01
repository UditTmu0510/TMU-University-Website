@extends('layouts.adminlayout_new')
@section('content')
<style>
.color-table.success-table thead th {
    background-color: #00c292;
    color: #fff;
}
</style>
<div class="pagetitle">
    <h1>Update Key Indicator</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Key Indicator</a></li>
        {{-- <li class="breadcrumb-item">Permission</li> --}}
        <li class="breadcrumb-item active">Update Key Indicator</li>
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
      <form  method="POST" action="{{route('naac_keyindicator.edit',['id'=>$naackeyindicatorData->key_indicator_id])}}" enctype="multipart/form-data" >
        @csrf
        <div class="row" style="margin-top:30px;">

            <div class="col-md-4">
                <label for="criterion_id" class="form-label">Select Criterion</label>
                <select class="form-select" name="criterion_id" id = "criterion_id" aria-label="Default select example" required>
                    <option>Select Criterion</option>
                @foreach($criterions as $criterion)
<option {{$naackeyindicatorData->criterion_id == $criterion->criterion_id ? 'selected' : ''}} value="{{$criterion->criterion_id}}">{{$criterion->criterion_name}}</option>
                @endforeach
                  </select>
                
              </div>


            <div class="col-md-4">
                <label for="key_indicator_name" class="form-label" style="font-size:13px;">KeyIndicator Name</label>
                    <input type="text" name="key_indicator_name" id="key_indicator_name" class="form-control" value= "{{$naackeyindicatorData->key_indicator_name}}"" required />
                    <div id="result" style="color:black;"></div>
              </div>

        <div class="col-md-4">
            <label for="key_indicator_description" class="form-label" style="font-size:13px;">KeyIndicator Description</label>
            <input type="text" name="key_indicator_description" id="key_indicator_description" class="form-control" value="{{$naackeyindicatorData->key_indicator_description}}" required />
        </div>



    </div>

              
<div class="row mt-3">

    <div class="col-md-6">
        <label for="key_indicator_status" class="form-label">KeyIndicator Status</label>
        <select class="form-select" name="key_indicator_status" id = "key_indicator_status" aria-label="Default select example" required>
            <option>KeyIndicator Status</option>
            <option {{$naackeyindicatorData->key_indicator_status == 'Y' ? 'selected' : ''}} value="Y">Yes</option>
            <option {{$naackeyindicatorData->key_indicator_status == 'N' ? 'selected' : ''}} value="N">No</option>
          </select>
        
      </div>


      <div class="col-md-6"> 
        <label for="ckey_indicator_priority" class="col-form-label">KeyIndicator Priority</label>
        <input class="form-control" type="number" name="key_indicator_priority" id="key_indicator_priority"  value="{{$naackeyindicatorData->key_indicator_priority}}" required />
      </div>


</div> 

        <div class="text-center"><br/>
          <input type="submit" class="btn btn-primary" value="Update KeyIndicator" id="myButton"  />
      
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

