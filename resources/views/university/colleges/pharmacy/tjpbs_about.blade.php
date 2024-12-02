@extends('layouts.university.colleges.pharmacy_tjpbs_about_with_sidebar')
@section('content')

<style>
    html {
        scroll-behavior: smooth !important;
    }

    .h3size {
        font-size: 20px;
    }
</style>
<link rel="stylesheet" href="assets/css/college_overview.css">


<div class="main-content">
    <h1 class="tmu-text-primary tmu-page-heading mt-md-5"><span>Welocome To TMU Journal of Pharmaceutical </span><span>and Biological Sciences (TJPBS)</span></h1>
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
            <h3 class="mb-2 pb-0 tmu-text-primary fw-bold h3size" id="oapolicy"><span>Open Access</span> <span> Policy</span></h3>
            <p class="about-p text-justify mb-4">All the published manuscripts in TJPBS are freely available to view, download and share
                without taking prior permission from the publisher or the author. However, duly
                acknowledgement to the original author must be given. Author(s) retain the copyright of their
                work, with articles licensed to <b>TJPBS</b>. All the published articles are licensed under a <b>Creative
                    Commons License CC BY-NC</b>.</p>
            <h3 class="mb-2 pb-0 tmu-text-primary fw-bold h3size" id="prpolicy"><span>Peer-Review</span> <span> Policy</span></h3>
            <p class="about-p text-justify mb-4">All the submitted manuscripts shall be checked for plagiarism/ similarity index, manuscripts
                having less than 10 percent of the similarity index will be subjected to the editorial review.
                Once manuscript is found satisfactory after editorial review then it will be subjected to a
                double-blinded peer-review process. <span class="highlight">Each paper will be evaluated by one external reviewer
                    and one internal reviewer.</span>
                In accordance with COPE (Committee on Publication Ethics) guidelines on ethical editing for
                Editors, the submissions of the editors and editorial board members will not be handled by
                themselves however; a guest editor or other editorial board members will be assigned for
                such manuscripts</p>

        </div>
    </section>

</div>
</div>

<script>
    document.querySelectorAll('.scroll-link').forEach(link => {
    link.addEventListener('click', function(e) {
    e.preventDefault(); // Prevent default behavior of adding #id to URL

    const targetId = this.getAttribute('href').substring(1); // Get the id without #
    const targetElement = document.getElementById(targetId);

    if (targetElement) {
    window.scrollTo({
    top: targetElement.offsetTop - 20, // Adjust offset if necessary
    behavior: 'smooth' // Smooth scrolling
    });
    }
    });
    });
</script>
@endsection