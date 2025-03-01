@extends('layouts.university.main')
@section('content')




<!-- Banner Code start -->
<section>
    <div class="container-fluid px-0">
        <img src="/assets/img/banner/111.webp" alt="Image 1">
    </div>
</section>
<!-- Banner Code end -->



<div class="container hh1">
    <h1 Class="tmu-text-primary tmu-page-heading text-center mb-5"><span>JOB </span><span> OPENINGS</span></h1>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title-job mb-3">ACADEMIC JOB OPENINGS</h5>
                    <hr class="horizontal-line">
                    @foreach ($academicJobs as $job)
                    <button class="careers-accordion">{{ $job->title }}<span class="icon">+</span></button>
                    <div class="panel">
                    <h3 class="tmu-text-primary"><span>Job </span><span> Description:</span></h3>
                    <p>{{ $job->description }}</p>
                    <h3 class="tmu-text-primary"><span>Responsibilities :</span></h3>
                    <p>{{ $job->responsibilities }}</p>
                    <h3 class="tmu-text-primary"><span>Requirements:</span></h3>
                    <p>{{ $job->requirements }}</p>
                        
                        <button class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14">
                            <a href="{{ $job->img_path }}" target="blank">Read More</a>
                        </button>
                        <br>
                    </div>
                    <hr class="horizontal-line">
                    @endforeach
                </div>
            </div>
            <div class="col-md-6 mt-5 mt-md-0">
                <div class="card-body">
                    <h5 class="card-title-job mb-3">ADMINISTRATION JOB OPENINGS</h5>
                    <hr class="horizontal-line">
                    @foreach ($adminJobs as $job)
                    <button class="careers-accordion">{{ $job->title }}<span class="icon">+</span></button>
                    <div class="panel">
                    <h3 class="tmu-text-primary"><span>Job </span><span> Description:</span></h3>
                    <p>{{ $job->description }}</p>
                    <h3 class="tmu-text-primary"><span>Responsibilities :</span></h3>
                    <p>{{ $job->responsibilities }}</p>
                    <h3 class="tmu-text-primary"><span>Requirements:</span></h3>
                    <p>{{ $job->requirements }}</p>
                        <button class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14">
                            <a href="{{ $job->img_path }}" target="blank">Read More</a>
                        </button>
                    </div>
                    <hr class="horizontal-line">
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>


<div class="container ">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 form-container">
            <h2 Class="tmu-text-primary text-center  fs-28 mb-0 pb-0"><span>Ready to take </span><span>the next step?</span></h2>
            <p class="fs-14 mt-0 pt-0 text-center ">Click the button below to upload your resume and complete your application</p>
            <a href="{{ route('job.form') }}" target="_blank" class="mx-auto tmu-btn btn-1 py-2 d-block w-fit-content mt-3 fade-animation" title="Apply Now">Apply Now</a>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

<div class="box-container">
    <div class="box">
        <h2 class="tmu-text-primary text-center"><span>HIGHLIGHTS</span></h2>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <ul class="list">
                    <li>3500+ staff.</li>
                    <li>Diversity- Staff from all the states of India.</li>
                    <li>Faculty from top Institutions of India and abroad.</li>
                    <li>Pay Scale at par with the best in the sector.</li>
                    <li>International Tie ups with 50+ foreign Universities for Faculty exchange.</li>
                    <li>Excellent Teaching, Learning and Research Environment.</li>
                    <li>Immense opportunities to learn and grow faster than your colleagues working elsewhere.</li>
                    <li>Opportunities for the staff to take up responsibilities in various roles early in their careers
                        to groom them as potential leaders at various levels.</li>
                    <li>Mediclaim Benefits/ ESIC Benefits for staff.</li>
                </ul>
            </div>
            <div class="col-md-6 col-sm-12">
                <ul class="list">
                    <li>Travel Grants for National and International conferences.</li>
                    <li>Incentives for publishing in indexed journals such as Scopus/WoS.</li>
                    <li>Incentives on Funded Projects.</li>
                    <li>Incentives for Patent filling.</li>
                    <li>Support for IPR filing and Commercialization.</li>
                    <li>Revenue sharing on Consultancy Projects.</li>
                    <li>Provision for Post Doc Fellowships.</li>
                    <li>Seed money for initiation of research work.</li>
                    <li>Multidisciplinary Projects Grants.</li>
                    <li>Research appreciation awards including international visits.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section id="slider" class="slider-element py-5 mt-lg-5">
    <div class="container">
        <div class="row flex-sm-row-reverse justify-content-center justify-content-lg-between col-mb-80">
            <div class="col-lg-5 col-8">
                <div class="dotted-bg">
                    <img src="/assets/img/udit.png" alt="Image 1" class="d-flex z-1 ms-auto w-100 position-relative" style="border-radius: 2rem;">
                </div>
            </div>
            <div class="col-lg-7">
                <h2 class="tmu-text-primary text-center"><span>Work Where </span><span> You Matter</span></h2>
                <h3 class="color fs-5 mb-3">Join TMU</h3>
                <div class="row col-mb-30">

                    <div class="col-md-6 col-sm-12">
                        <div class="card counter-card">
                            <div class="card-body">
                                <h4 class="card-title-job" style="text-align: justify;">Commitment to Employee Development</h4>
                                <p class="card-text text-color" style="text-align: justify;">At TMU, we believe in nurturing our team's potential through comprehensive training programmes, professional development courses, and continuing education opportunities to further your career.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="card counter-card">
                            <div class="card-body">
                                <h4 class="card-title-job" style="text-align: justify;">Competitive Compensation and Benefits</h4>
                                <!-- <p class="card-text"><span data-from="1" data-to="10" data-refresh-interval="4" data-speed="1000"></span></p> -->
                                <p class="card-text text-color" style="text-align: justify;">We offer attractive salary packages that compete with the best in the academia-industry, along with exceptional benefits including medical benefits, retiral benfits and generous leave policies.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="card counter-card">
                            <div class="card-body">
                                <h4 class="card-title-job" style="text-align: justify;">Work-Life Balance</h4>
                                <p class="card-text text-color" style="text-align: justify;">We understand the importance of a balanced life. TMU supports this with flexible working hours, remote work options, and family-friendly policies to help you manage your personal and professional life effectively.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="card counter-card">
                            <div class="card-body">
                                <h4 class="card-title-job" style="text-align: justify;">Community and Social Responsibility </h4>
                                <p class="card-text text-color" style="text-align: justify;">Engage in meaningful community service and sustainability initiatives. TMU is committed to social responsibility and offers various platforms for staff to contribute to social improvement.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="card counter-card">
                            <div class="card-body">
                                <h4 class="card-title-job" style="text-align: justify;">Dynamic Networking Opportunities</h4>
                                <p class="card-text text-color" style="text-align: justify;">Expand your professional network significantly at TMU. Regular academic conferences, industry collaborations, and alumni events provide ample opportunities to connect with influential professionals both locally and globally.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="card counter-card">
                            <div class="card-body">
                                <h4 class="card-title-job" style="text-align: justify;">Robust Upskilling Programmes</h4>
                                <p class="card-text text-color" style="text-align: justify;">Stay ahead of the curve with TMU’s tailored upskilling initiatives. We prioritise keeping our staff at the forefront of their fields with access to the latest tools, technologies, and industry practices through workshops and seminars.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container mb-5 mt-5">
    <h2 class="tmu-text-primary text-center">
        <span>Frequently</span>
        <span>Asked Questions</span>
    </h2>
    <hr class="horizontal-line">
    <button class="careers-accordion">Working environment<span class="icon">+</span></button>
    <div class="panel">
        <p>The work environment is truly conductive & intriguing to develop you professionally and personally. We have a
            workforce of 4000 employees. Our team of renowned administrators and academicians from reputed institutes
            help you realize your best and enhance your caliber.</p>
    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">
    <button class="careers-accordion">Campus<span class="icon">+</span></button>
    <div class="panel">
        <p>The University is located in the vicinity of the beautiful city of Moradabad and is at a reasonable distance
            from Moradabad Bus stand and Railway station. The campus occupies the geographical area of 130 Acres.</p>
    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">
    <button class="careers-accordion">Career Opportunities<span class="icon">+</span></button>
    <div class="panel">
        <p>If you are the one who is looking forward to broaden the career horizons, then Teerthanker Mahaveer
            University is the perfect place for you. We not only develop our student’s skills and enhance them through
            extra training programs like Industry Placements, Higher studies, and classes for Government, Civil, and
            Banking sectors, but also give equal growth opportunities to our staff through Internal Job Posting (IJP),
            International Faculty Exchange Programs, Research opportunities and more.</p>
    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">
    <button class="careers-accordion">Residential complex for faculties<span class="icon">+</span></button>
    <div class="panel">
        <p>Yes, TMU accommodates the faculty family keeping in mind their comfort and other amenities. Our residential
            complex for faculties is fully equipped with Wi-Fi, Gymnasium, Indoor game area, Night Canteen and Tuck
            shops, 24X7 Health facilities, 24X7 Power backup, salon and more.</p>
    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">
</div>


@endsection