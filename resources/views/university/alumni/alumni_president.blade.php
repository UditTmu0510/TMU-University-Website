@extends('layouts.university.departments.alumni_with_sidebar')
@section('content')

<style>
    @media (max-width: 767.98px) {
        .quote-box {
            width: 100%;
            background-color: transparent;
            box-shadow: none;
            padding: 0;
        }
    }
</style>
<div class="main-content mt-3 mt-sm-0 pt-2 pt-sm-5">
    <div class="container">
        <div class="">
            <h1 class="tmu-text-primary tmu-page-heading"><span>Message from the </span><span>President's Desk</span></h1>
            <div class="quote-box mx-auto">
                <div class="profile-image mb-2">
                    <img src="{{asset('/assets/img/department/alumni/dean/president.jpg')}}" alt="Profile Image">
                </div>
                <div class="quote-text mt-4 mt-md-0">
                    <p class="text-justify text-dark fs-14 mb-2"><i class="bi bi-quote" style="font-size:30px; color: #737373;"></i>I think the success of any University can be measured by the contribution the alumni make to our national life.<span class="highlight fs-12" style="color: #ff7900;">John F. Kennedy</span></p>
                    <p class="text-justify text-dark fs-14 mb-2">On behalf of this great institution, it is my pleasure to welcome you to the Teerthanker Mahaveer University Alumni Association. Our association exists solely to support and uplift our alumni and, by extension, the University itself. With every passing day, as we juggle our family and work commitments, it’s easy to lose touch with those outside our immediate circles. The Alumni Association bridges this gap, connecting you with friends, faculty, and the extensive resources available here—from seminars and symposia to our libraries, websites, social media, and a variety of programs designed to support you in your post-academic journey.</p>
                    <p class="text-justify text-dark fs-14 mb-2">Teerthanker Mahaveer University’s alumni family spans across the globe, with thousands of alumni making a difference in every corner of the world. Through alumni events, regional networking gatherings, on-campus activities, and career advisory services, the Association provides opportunities to strengthen these connections and foster success. Our resources and initiatives are all designed with your achievements in mind, as your success is ultimately a reflection of our University’s success.</p>
                    <p class="text-justify text-dark fs-14 mb-2">At the same time, we encourage you to consider ways you can give back to the University in whichever capacity feels right for you. Beyond monetary support, giving back can take many forms, from mentoring and volunteering to attending academic and social events. Not only is this a fantastic way to reconnect with friends and stay involved, but it also brings personal fulfillment. So, thank you for being here today. I encourage you to explore the many ways to stay connected with us, and if you’re ever in the area, please feel free to visit Alumni House, where our staff would be delighted to welcome you and update you on what’s happening around campus.</p>
                    <p class="text-justify text-dark fs-14 mb-2">I hope you enjoy your visit to the website and should you wish to contact us, please find details on the contact page.</p>
                    <p class="mt-3">Dr. Satyendra Arya</p>
                    <p>President – TMU Alumni Association</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection