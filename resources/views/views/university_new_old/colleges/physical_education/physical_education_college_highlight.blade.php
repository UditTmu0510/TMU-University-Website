@extends('layouts.university.colleges.physical_education_with_sidebar')
@section('content')
<style>
    .custom-bg {
        background-color: #f9f9f9;
        padding: 50px 0;
        border-radius: 5px;
        margin-top: 20px;
    }

    .custom-btn {
        background-color: #007bff;
        border: none;
        color: white;
    }

    .section-box {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 20px;
        background-color: #fff;
        min-height: 130px;
        transition: transform 0.3s;
    }

    .section-box:hover {
        transform: translateY(-5px);
    }

    .section-title {
        font-size: 1.5em;
        line-height: 1.9em;
        color: #ff7900;
    }
</style>

<div class="main-content">
    <div class="container">
        <section class="custom-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="row g-3">
                            <div class="col-12">
                                <img src="{{asset('/assets/img/banner_overview/physical_education/highlight_2.webp')}}" class="img-fluid rounded" style="height: 250px; width: 100%;" alt="Property 1">
                            </div>
                            <div class="col-6">
                                <img src="{{asset('/assets/img/banner_overview/physical_education/highlight_1.webp')}}" class="img-fluid rounded" style="height: 150px; width: 100%;" alt="Property 3">
                            </div>
                            <div class="col-6">
                                <img src="{{asset('/assets/img/banner_overview/physical_education/highlight_3.jpg')}}" class="img-fluid rounded" style="height: 150px; width: 100%;" alt="Property 4">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 d-flex flex-column justify-content-center p-5">
                        <div class="">
                            <h1 class="tmu-text-primary tmu-page-heading"><span>College </span><span> Highlights </span></h1>
                            <p>TMIMT College of Physical Education is committed to nurturing holistic development in students, integrating health, knowledge, and service to humanity. Our vision is to create a world where every individual can achieve wellness in body, mind, and spirit. Our mission is to provide a well-rounded education that combines academic excellence, humanistic values, and a dedication to community service.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="section-box p-3">
                        <h3 class="tmu-text-primary mb-2"><span>Vision</span></h3>
                        <p>"The Vision of TMIMT College of Physical Education is to see a World where all individuals have the opportunity to live healthy lives in Body, Mind and Spirit"</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-box p-3">
                        <h3 class="tmu-text-primary mb-2"><span>Mission</span></h3>
                        <p>"The Mission is to educate students in body, mind and spirit, to enhance the leadership in service to humanity by building up on foundation of humanics, academic excellence and value-based education"</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-3">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="section-box p-3">
                        <h3 class="tmu-text-primary mb-2"><span>Facilities</span></h3>
                        <ol class="m-ol-list ps-5 mb-3">
                            <li>State-of-the-art Indoor Sports Complex</li>
                            <li>Professional Cricket Ground(s) with Pavilion</li>
                            <li>Books – 3480, Journals – 06, Hobby Books – 2600, Total Tittles – 1662</li>
                            <li>Placement Cell (100% Placement)</li>
                            <li>School Teaching Practice Exposure</li>
                            <li>Eminent Teaching Falculty</li>
                        </ol>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-box p-3">
                        <h3 class="tmu-text-primary mb-2"><span>Extra Co-curricular</span></h3>
                        <ol class="m-ol-list ps-5 mb-3">
                            <li>Leadership & Skill Camp and Recreation</li>
                            <li>Personality Development</li>
                            <li>Debate Competitions</li>
                            <li>Important Day's celebration</li>
                            <li>Nutrition & Medical Camp</li>
                            <li>Summer Camp</li>
                            <li>Sports Meets, Officating Exposure</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>
</div>
<!-- Bootstrap JS and dependencies -->
@endsection