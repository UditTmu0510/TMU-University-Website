@extends('layouts.university.departments.about_tmu_with_sidebar')
@section('content')

<style>
    @media screen and (max-width: 912px) {
        .img-112 {
            max-height: 350px !important;
            width: auto !important;
            object-fit: contain; /* Ensures the image maintains aspect ratio without stretching */
        }
    }
</style>


<div class="main-content">
    <div class="container">
                  
                        <div class="row">
                            <h2 class="tmu-text-primary tmu-page-heading pt-md-5">
                               <span>Founder Vice</span> <span>Chancellor Desk</span></h2>
                            <div class="col-lg-4 col-md-12 col-sm-12 mb-3 ">
                                <img src="{{asset('/assets/img/aboutus/administration/pvc.PNG')}}" class="w-100 img-112 mx-auto d-block" alt="">
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12">
                                <p class="person-quote px-4 px-md-5">
                                    The challenge before the educationists today is to channelize the intelligent,
                                    creative and enthusiastic youth of the country into the <span
                                        class="highlight">nation building process</span>. I strongly believe that right
                                    mix of education focusing on <span class="highlight">head, heart and hand</span> can
                                    substantially help in meeting this challenge. The need therefore is to <span
                                        class="highlight">reorient education</span> that concentrates on the development
                                    of <span class="highlight">right attitude, knowledge and skill set</span> of the
                                    students and that is what we are concentrating upon here. In recent past interactive
                                    meets with the industries at Kashipur- Rudrapur, Haridwar, Gajraula and Dehradun
                                    have opened up new opportunities for the students and faculty to understand the
                                    issues confronting the industries and their solutions, besides providing larger
                                    avenues for training and placement.<br>
                                    The facilities and the efforts to promote research activities in the university have
                                    started yielding satisfactory results whereby in the last one year <span
                                        class="highlight">210 quality research papers have been published</span>. We are
                                    further consolidating the research base by adding more research labs and
                                    collaborating with industries and academia.<br>

                                    Similarly, a beginning has been made towards <span class="highlight">consultancy by
                                        taking projects from local industries</span> in association with Consultancy
                                    Development Centre, New Delhi. I am confident that these initiatives shall
                                    sufficiently groom the students to acquire the required competencies to smoothly
                                    sail through their journey of <span class="highlight">personal and professional
                                        life</span>.<br>
                                    My best wishes to all the aspiring students.
                                <div class="person-details float-right">Prof. R. K. Mittal <br><span>(संस्थापक
                                        कुलपति)</span></div>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

</div>
</div>


@endsection