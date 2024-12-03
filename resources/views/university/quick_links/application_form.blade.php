@extends('layouts.university.departments.quicklinks_with_sidebar')
@section('content')

<style>
  .tab-content {
    max-height: fit-content !important;
  }

  .iqac-card {
    display: flex;
    width: auto;
  }
</style>



<section id="content" class="w-100 mb-4">
  <div class="content-wrap py-0">

    <h1 class="tmu-text-primary tmu-page-heading mt-md-5"><span> Admissions Open for </span><span> the Session 2024</span></h1>


    <div class="container py-2 px-lg-5">
      <p class="fs-18 mb-2"><b>Admission Process:</b> Admission will be based on TMU’s admission policy.</p>

      <p class="fs-18"><b>Application Form:</b> The application form can be submitted with a demand draft of Rs 1,000 at Teerthanker Mahaveer University, Moradabad.</p>
    </div>
    <div class="iqac-container">
      <div class="iqac-card">
        <div class="card-pdf">
          <!-- <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon"> -->
          <i style="font-size:40px;line-height:0px; background-color:lightgray; padding: 2.4rem 1.4rem; border-radius:50%;" class="icon-featured fa-solid fa-keyboard"></i>
          <h5 class="mt-4 mb-2 fw-bold tmu-color">APPLY ONLINE</h5>
          <p class="description mt-0 pt-0">Upload Documents, Pay Online and Get Admitted!</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
            href="https://admissions.tmu.ac.in">APPLY HERE</a>
        </div>
        <div class="card-pdf">
          <!-- <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon"> -->
          <i style="font-size:40px;line-height:0px; background-color:lightgray; padding: 2.4rem 1.4rem; border-radius:50%;" class="icon-featured fa fa-download"></i>
          <h5 class="mt-4 mb-2 fw-bold tmu-color">DOWNLOAD APPLICATION FORM</h5>
          <p class="description mt-0 pt-0">Download Application Form for offline submission</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
            href="{{ asset('assets/pdf/application_form/TMU_Application_Form_2024.pdf') }}">DOWNLOAD FORM</a>
        </div>
      </div>
    </div>
    <div class="container py-2 px-lg-5">
      <p class="fs-24 pb-2 fw-bold">Get more information:</p>
      <p class="fs-18 pb-1"><b>Admission Helpline No - </b> 1800-270-1490</p>
      <p class="fs-18 pb-2"><b>Email - </b> admissions@tmu.ac.in</p>
    </div>



  </div>
</section>

</div>
@endsection