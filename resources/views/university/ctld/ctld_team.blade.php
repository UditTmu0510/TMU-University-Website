@extends('layouts.university.departments.ctld_with_sidebar')
@section('content')

<div class="main-content">
  <div class="container">
    <!-- <h3 class="mb-2 pb-0"><b>University Administration</b> </h3> -->
    <h1 class=" tmu-text-primary tmu-page-heading mb-0"><span>CTLD </span> <span> Team</span></h1>

    <div class="container mb-4">
      <div class="row row-cols-1 row-cols-md-3 g-4 mt-0">
        @foreach($employees as $employee) 
<div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
  <div class="card card-animation">
    <img src="{{asset($employee->employee_image_path)}}" class="card-img-top" alt="Image 3">
    <div class="card-body text-center">
      <h5 class="card-title tmu-text-primary fw-bold">
        <span></span><span>{{ $employee->first_name.' '.$employee->last_name }}</span>
      </h5>
      <p class="card-text fs-14">
        {{ optional($employee->designation_name)->designation_name ?? 'No Designation Available' }}
      </p>
      
      @if(!empty($employee->email) && strtolower($employee->email) != 'na')
        <p class="card-text fs-14">{{ $employee->email }}</p>
      @endif

      {{-- Check if phone is not empty and not equal to 'na' --}}
      @if(!empty($employee->phone) && strtolower($employee->phone) != 'na')
        <p class="card-text fs-14">{{ $employee->phone }}</p>
      @endif
    </div>
  </div>
</div>
@endforeach
      </div>
    </div>
  </div>
</div>
</div>
@endsection