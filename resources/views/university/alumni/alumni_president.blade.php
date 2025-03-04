@extends('layouts.university.departments.alumni_with_sidebar')
@section('content')

<link rel="stylesheet" href="https://unpkg.com/@phosphor-icons/web@2.0.3/src/bold/style.css" />
<style>
    :root {
        --card-bg: linear-gradient(145deg, #ffffff, #f8f9fa);
        --text-color: #2d3436;
        --subtext-color: #636e72;
        --card-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }
</style>



<div class="main-content mt-3 mt-sm-0 pt-2 pt-sm-5">
    <div class="container py-5">
        <div class="row justify-content-center">
        <h1 class="tmu-text-primary tmu-page-heading "><span> From the Desk </span><span> of President</span></h1>
            <div class="col-lg-10">
                <div class="principal-card23">
                    <i class="ph-bold ph-quotes principal-quote-icon23"></i>
                    <div class="row">
                        <div class="col-md-10 mx-auto text-center">
                            <div class="d-flex justify-content-between">


                                <div class="principal-image-wrapper23">
                                    <img src="{{asset('/assets/img/department/alumni/dean/president.jpg')}}" alt="President Alumni" class="principal-image23" style="object-position: top;">
                                    <div class="principal-image-decoration23"></div>
                                </div>
                                <div class="principal-info23">
                                    <h4 class="principal-name23">Dr. Satyendra Arya</h4>
                                    <p class="principal-position23">
                                        <!-- <i class="ph-bold ph-briefcase me-2"></i> -->
                                        President – TMU Alumni Association
                                    </p>
                                </div>
                            </div>
                            <p class="principal-text23 text-justify">
                            I think the success of any University can be measured by the contribution the alumni make to our national life.<span class="highlight fs-14">John F. Kennedy</span>
                                <br>
                                <br>
                                On behalf of this great institution, it is my pleasure to welcome you to the Teerthanker Mahaveer University Alumni Association. Our association exists solely to support and uplift our alumni and, by extension, the University itself. With every passing day, as we juggle our family and work commitments, it’s easy to lose touch with those outside our immediate circles. The Alumni Association bridges this gap, connecting you with friends, faculty, and the extensive resources available here—from seminars and symposia to our libraries, websites, social media, and a variety of programs designed to support you in your post-academic journey.
                                <br>
                                <br>
                                Teerthanker Mahaveer University’s alumni family spans across the globe, with thousands of alumni making a difference in every corner of the world. Through alumni events, regional networking gatherings, on-campus activities, and career advisory services, the Association provides opportunities to strengthen these connections and foster success. Our resources and initiatives are all designed with your achievements in mind, as your success is ultimately a reflection of our University’s success.
                                <br>
                                <br>
                                At the same time, we encourage you to consider ways you can give back to the University in whichever capacity feels right for you. Beyond monetary support, giving back can take many forms, from mentoring and volunteering to attending academic and social events. Not only is this a fantastic way to reconnect with friends and stay involved, but it also brings personal fulfillment. So, thank you for being here today. I encourage you to explore the many ways to stay connected with us, and if you’re ever in the area, please feel free to visit Alumni House, where our staff would be delighted to welcome you and update you on what’s happening around campus.<br>
                                <br>
                                I hope you enjoy your visit to the website and should you wish to contact us, please find details on the contact page.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection



























