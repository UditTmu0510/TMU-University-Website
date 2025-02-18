@extends('layouts.university.departments.about_tmu_with_sidebar')
@section('content')






<div class="main-content">
  <div class="container">

    <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span>University</span><span> Administration</span></h1>
    <div class="container">
      <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">

        @foreach($administrators as $administrator)
        <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
          <div class="card card-animation admin-cards">
            <img src="{{asset($administrator->employee_image_path)}}" class="card-img-top" alt="Suesh Jain Sir">
            <div class="card-body text-center"> <!-- Added 'text-center' class -->
              <h5 class="card-title tmu-text-primary fw-bold"><span></span><span>{{$administrator->first_name.' '.$administrator->last_name}}</span></h5>
              <p class="card-text fs-14">{{ optional($administrator->designation_name)->designation_name ?? 'No Designation Available' }}</p>

              @if(!empty($administrator->email) && strtolower($administrator->email) != 'na')
              <p class="card-text fs-14">{{ $administrator->email }}</p>
              @endif

              {{-- Check if phone is not empty and not equal to 'na' --}}
              @if(!empty($administrator->phone) && strtolower($administrator->phone) != 'na')
              <p class="card-text fs-14">{{ $administrator->phone }}</p>
              @endif
            </div>
          </div>
        </div>
        @endforeach

      </div>
      <h2 class="tmu-text-primary tmu-page-heading mt-4 mb-3"><span>Academic </span><span> Heads</span></h2>
      <h2 class="tmu-text-primary tmu-page-heading mt-4 mb-3"><span>&nbsp;&nbsp;</span><span>Deans</span></h2>
      <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">

        @foreach ($deans as $dean)
        <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
          <div class="card card-animation admin-cards">
            <img src="{{asset($dean->employee_image_path)}}" class="card-img-top" alt="S.K.Jain">
            <div class="card-body text-center"> <!-- Added 'text-center' class -->
              <h5 class="card-title tmu-text-primary fw-bold"><span></span><span>{{$dean->first_name.' '.$dean->last_name}}</span></h5>
              <p class="card-text fs-14">{{ (optional($dean->designation_name)->designation_name ?? 'No Designation Available') . ', ' . (optional($dean->faculty)->fy_name ?? 'No Faculty Available') }}</p>
              @if(!empty($dean->email) && strtolower($dean->email) != 'na')
              <p class="card-text fs-14">{{ $dean->email }}</p>
              @endif

              {{-- Check if phone is not empty and not equal to 'na' --}}
              @if(!empty($dean->phone) && strtolower($dean->phone) != 'na')
              <p class="card-text fs-14">{{ $dean->phone }}</p>
              @endif
            </div>
          </div>
        </div>
        @endforeach
      </div>

      <h2 class="tmu-text-primary tmu-page-heading mt-4 mb-3"><span>&nbsp;&nbsp;</span><span>Principals</span></h2>
      <div class="row row-cols-1 row-cols-md-3 g-4 mt-2 mb-4">
        @foreach($principals as $principal)
        <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
          <div class="card card-animation admin-cards">
            <img src="{{asset($principal->employee_image_path)}}" class="card-img-top" alt="Vipin sir">
            <div class="card-body text-center"> <!-- Added 'text-center' class -->
              <h5 class="card-title tmu-text-primary fw-bold"><span></span><span>{{$principal->first_name.' '.$principal->last_name}}</span></h5>
              <p class="card-text fs-14">{{( optional($principal->designation_name)->designation_name ?? 'No Designation Available' ). ', ' .( optional($principal->college_name)->cd_name ?? 'No College Available' )}}</p>
              @if(!empty($principal->email) && strtolower($principal->email) != 'na')
              <p class="card-text fs-14">{{ $principal->email }}</p>
              @endif

              {{-- Check if phone is not empty and not equal to 'na' --}}
              @if(!empty($principal->phone) && strtolower($principal->phone) != 'na')
              <p class="card-text fs-14">{{ $principal->phone }}</p>
              @endif
            </div>
          </div>
        </div>
        @endforeach

      </div>

      <h2 class="tmu-text-primary tmu-page-heading mt-4 mb-3"><span>Heads of </span><span>Departments</span></h2>
      <div class="row row-cols-1 row-cols-md-3 g-4 mt-2 mb-4">
        @foreach($hods as $hod)
        <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
          <div class="card card-animation admin-cards">
            <img src="{{asset($hod->employee_image_path)}}" class="card-img-top" alt="Vipin sir">
            <div class="card-body text-center"> <!-- Added 'text-center' class -->
              <h5 class="card-title tmu-text-primary fw-bold"><span></span><span>{{$hod->first_name.' '.$hod->last_name}}</span></h5>
              <p class="card-text fs-14">
                {{ (optional($hod->designation_name)->designation_name ?? 'No Designation Available') . ', ' . (optional($hod->college_name)->cd_name ?? 'No College Available') }}
              </p>

              @if(!empty($hod->email) && strtolower($hod->email) != 'na')
              <p class="card-text fs-14">{{ $hod->email }}</p>
              @endif

              {{-- Check if phone is not empty and not equal to 'na' --}}
              @if(!empty($hod->phone) && strtolower($hod->phone) != 'na')
              <p class="card-text fs-14">{{ $hod->phone }}</p>
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


</div>
</div>


@endsection