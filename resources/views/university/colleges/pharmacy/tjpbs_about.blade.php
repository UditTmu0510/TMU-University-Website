@extends('layouts.university.colleges.pharmacy_tjpbs_with_sidebar')
@section('content')

<style>
    html {
        scroll-behavior: smooth !important;
    }

    .h3size {
        font-size: 20px;
    }
</style>
<link rel="stylesheet" href="{{asset('assets/css/college_overview.css')}}">


<div class="main-content">
    <h1 class="tmu-text-primary tmu-page-heading mt-md-5"><span>Welcome To  </span><span>TMU Journal of Pharmaceutical and Biological Sciences (TJPBS)</span></h1>
    <section class="about-section bg-light mt-4 p-3">
        <div class="container">
            <div class="image-content text-center p-4" id="about">
                <img src="{{asset('/assets/img/112.jpg')}}" alt="Learning and Teaching">
            </div>
            <h3 class="mb-2 pb-0 pt-4 tmu-text-primary fw-bold h3size"><span>About </span> <span> TJPBS</span></h3>
            <p class="about-p pb-4 text-justify">TMU Journal of Pharmaceutical and Biological Sciences (TJPBS) is an online quarterly
                official publication of College of Pharmacy, Teerthanker Mahaveer University, Moradabad
                which endeavors to publish original work in the area of pharmaceutical and allied sciences.</p>


            <h3 class="mb-2 pb-0 tmu-text-primary fw-bold h3size" id="aims"><span>Aims &</span> <span> Scope</span></h3>
            <p class="about-p text-justify">TMU Journal of Pharmaceutical and Biological Sciences (TJPBS) publishes manuscripts,
                Original research and review articles, Systematic reviews, Mini-reviews, Short
                communication, Case studies, Case reports covering diverse areas within pharmaceutical and
                allied sciences, including:</p>
            <ul class="m-ol-list ps-5 mb-4">
                <li>Drug discovery and development</li>
                <li>Pharmacology and toxicology</li>
                <li>Phytochemistry and pharmacognosy</li>
                <li>Clinical pharmacy and pharmacotherapy</li>
                <li>Regulatory sciences and pharmacovigilance</li>
                <li>Pharmaceutical biotechnology and nanotechnology</li>
                <li>Medicinal/Dental/Nursing/ Physiotherapy/ Paramedical sciences</li>
                <li>Alternative medicine including medical systems under AYUSH</li>
                <li>Biotechnology and Bioallied sciences</li>
            </ul>
    

        </div>
    </section>

</div>
</div>


@endsection