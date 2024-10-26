@extends('layouts.university.main')
@section('content')

<link rel="stylesheet" href="{{asset('/assets/css/college.css')}}">


<section id="content">
    <div class="content-wrap py-0">
        <div class="container-fluid  my-0 px-2">
            <div class="row ps-4">
                <div class="col-md-6 pt-0 pt-md-4 ps-md-5 mb-4">
                    <h1 class=" mt-5 mb-5 d-none d-md-block  banner-main-heading">Welcome to <br> <span
                            style="font-weight:700!important;">TMU </span>Hospital</h1>
                    <h1 class=" mt-5 mb-3 d-block d-md-none"
                        style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:24px">
                        Welcome to<span>TMU </span>Hospital</h1>
                </div>
                <div class="col-12 col-md-6">
                    <div class="pe-lg-4 position-relative p-0">
                        <div style="z-index: 2;">

                            <img src="{{asset('/assets/img/banner/fine_arts/finearts-banner.webp')}}" alt=""
                                class="p-0 m-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-container">
            <div class="box">
                <h2 class="college-main-heading">College of Fine Arts, among the top Colleges for Fine Arts </h2>
                <div class="row">
                    <div class="col-12 px-2 px-md-5">
                        <p style="text-align: justify;">College of Fine Arts established in 2011 at Teerthanker Mahaveer
                            University (TMU), is renowned for its exceptional offerings in fine arts education.</p>
                        <div class="read-more-content mt-0">
                            <p style="text-align: justify;"> Whether you're aspiring to delve into the intricacies of
                                visual arts, performing arts, or pursue a career in art management, TMU provides a
                                nurturing environment enriched with academic excellence and practical learning
                                experiences.</p>
                        </div>
                        <a href="javascript:void(0);" class="tmu-btn btn-1 py-2 mt-4 read-more ms-2 mt-2"
                            title="Read More">Read More</a>

                    </div>

                </div>
            </div>
        </div>
        <div id="hospital-counter" class="container">
            <div class="row justify-content-center">
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="item">
                        <h1 class="count" data-number="900">0</h1>
                        <h3>Bed Capacity</h3>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="item">
                        <h1 class="count" data-number="45">0</h1>
                        <h3>Emergency & Casualty Beds</h3>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="item">
                        <h1 class="count" data-number="75">0</h1>
                        <h3>ICUs Beds</h3>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="item">
                        <h1 class="count" data-number="11">0</h1>
                        <h3>Modular Operation Theaters</h3>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="item">
                        <h1 class="count" data-number="16">0</h1>
                        <h3>Ventilators</h3>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="item">
                        <h1 class="count" data-number="1200">0</h1>
                        <h3>Employees including Doctors</h3>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="item">
                        <h1 class="count" data-number="20">0</h1>
                        <h3>Specialities</h3>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="item">
                        <h1 class="count" data-number="20">0</h1>
                        <h3>Daily Average Surgeries</h3>
                    </div>
                </div>
            </div>
        </div>



    </div>
</section>

<script>
const counters = document.querySelectorAll(".count");
counters.forEach(counter => {
    const updateCount = () => {
        const target = +counter.getAttribute('data-number');
        const count = +counter.innerText;
        const increment = target / 100;
        if (count < target) {
            counter.innerText = Math.ceil(count + increment);
            setTimeout(updateCount, 50);
        } else {
            counter.innerText = target;
        }
    };
    updateCount();
});
</script>


@endsection