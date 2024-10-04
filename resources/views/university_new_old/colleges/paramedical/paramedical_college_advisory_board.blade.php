@extends('layouts.university.colleges.paramedical_with_sidebar')
@section('content')
<div class="main-content">
    <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span> College Advisory </span><span> Board </span></h1>
    <div class="container">
        <h3 class="tmu-text-primary mb-2 mt-2"><span> Academic </span><span> Experts</span></h3>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-0">
            <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                <div class="card cab-members">
                    <img src="{{asset('/assets/img/advisory_board/paramedical/OM_PRAKASH_JASUJA.jpg')}}" class="card-img-top" alt="Image 3">
                    <div class="card-body text-center"> <!-- Added 'text-center' class -->
                        <h5 class="card-title tmu-text-primary fw-bold mb-0"><span></span><span>DR. OM PRAKASH JASUJA</span></h5>
                        <p class="card-text fs-14 "><b>Professor (Forensic Science)</b> </p>
                        <p class="card-text fs-14 ">R.I.M.T.University, Mandi Gobindgarh, Punjab</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                <div class="card cab-members">
                    <img src="{{asset('/assets/img/advisory_board/paramedical/KAMAL_PANT.jpg')}}" class="card-img-top"
                        alt="Image 2">
                    <div class="card-body text-center"> <!-- Added 'texmb-0t-center' class -->
                        <h5 class="card-title tmu-text-primary fw-bold"><span></span><span>DR. KAMAL PANT</span></h5>
                        <p class="card-text fs-14 "><b>Associate Professor & Head (Optometry)</b></p>
                        <p class="card-text fs-14 ">U.P.University of Medical Science, Saifai, Etawah</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                <div class="card cab-members">
                    <img src="{{asset('/assets/img/advisory_board/paramedical/MOHAN_BHAGWAT.jpg')}}" class="card-img-top"
                        alt="Image 2">
                    <div class="card-body text-center"> <!-- Added 'texmb-0t-center' class -->
                        <h5 class="card-title tmu-text-primary fw-bold"><span></span><span>MR. MOHAN BHAGWAT</span></h5>
                        <p class="card-text fs-14 "><b>Professor & Head (Radiological Imaging tech)</b></p>
                        <p class="card-text fs-14 ">Jamia Hamdard University, New Delhi</p>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="tmu-text-primary mb-2 mt-4"><span> Industry </span><span> Experts</span></h3>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-0 mb-5">
            <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                <div class="card cab-members">
                    <img src="{{asset('/assets/img/advisory_board/paramedical/KAPIL_DEV.jpg')}}" class="card-img-top"
                        alt="Image 1">
                    <div class="card-body text-center"> <!-- Added 'texmb-0t-center' class -->
                        <h5 class="card-title tmu-text-primary fw-bold"><span></span><span>DR. KAPIL DEV</span></h5>
                        <p class="card-text fs-14 "><b>Deputy Director (Forensic)</b></p>
                        <p class="card-text fs-14 ">Incharge Forensic Lab Moradabad</p>
                        <p class="card-text fs-14">&nbsp;</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                <div class="card cab-members">
                    <img src="{{asset('/assets/img/advisory_board/paramedical/NAROTAM_SHARMA.jpg')}}" class="card-img-top"
                        alt="Image 1">
                    <div class="card-body text-center"> <!-- Added 'texmb-0t-center' class -->
                        <h5 class="card-title tmu-text-primary fw-bold"><span></span><span>DR. NAROTAM SHARMA </span></h5>
                        <p class="card-text fs-14 "><b>Scientist & Head</b></p>
                        <p class="card-text fs-14 ">DNA Labs (NABL & ICMR Accredation ) Dehradun (UK)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
</div>
<!-- Bootstrap JS and dependencies -->

@endsection