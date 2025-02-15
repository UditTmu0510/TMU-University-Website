@extends('layouts.university.colleges.medical_with_sidebar')
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
        <h1 class="tmu-text-primary tmu-page-heading "><span> From the Desk </span><span> of Principal</span></h1>

            <div class="col-lg-10">
                <div class="principal-card23">
                    <i class="ph-bold ph-quotes principal-quote-icon23"></i>
                    <div class="row">

                        <div class="col-md-10 mx-auto text-center">
                            <div class="d-flex justify-content-between">

                           
                            <div class="principal-image-wrapper23">
                                <img src="{{asset('/assets/img/principal/medical/principal_medical.jpg')}}" alt="Principal" class="principal-image23" style="object-position: top;">
                                <div class="principal-image-decoration23"></div>
                            </div>
                            <div class="principal-info23">
                                <h4 class="principal-name23">Prof (Dr) Naveen Kumar Singh</h4>
                                <p class="principal-position23">
                                    <!-- <i class="ph-bold ph-briefcase me-2"></i> -->
                                    Principal
                                </p>
                            </div>
                        </div>
                            <p class="principal-text23 text-justify">
                            World has not been broken up into fragments by narrow domestic walls. Where words come out from
                        the depth of truth, where tireless striving stretches its arms toward perfection. Where the clear stream of reason has not lost its way into the dreary desert sand of dead habit
                         Where the mind is led forward by thee into ever widening thought and action. Into that heaven of freedom, my Father, LET MY COUNTRY AWAKE!<span class="highlight fs-14">Rabindranath Tagore</span>
                            <br>
                                <br>
                                Today I feel honoured to serve as the Principal of this prestigious college Teerthanker Mahaveer Medical College & Research Centre, which was established in 2008 with the entry of only 100 students for MBBS which was increased within a very short time to 150 students during the year 2014-15. The ladder of success has been constant and rather very fast for the Post Graduate seats also. There are 126 Post Graduate seats in different Pre, Para & Clinical subjects.
                                <br>
                                <br>
                                I have been given opportunities to sharpen my skills and knowledge to excel as a facilitator and a good organiser. It is now my turn to motivate faculty members to impart Knowledge and practical skills to students in becoming a perfect doctor. The two qualities also needed to pursue graduation and post graduation in any branch of Medicine to serve the society is to have sympathy and empathy for patients and their relatives.
                                <br>
                                <br>
                                My message to all staff and students is to have love and respect for all, move forward with purpose and passion.Medicos should never forget society has great expectation from them.<br>
                                <br>
                                Respect, care, discipline and punctuality are the mandatory qualities to enhance not only our image but also to transform our college into a centre of excellence
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
