@extends('layouts.university.departments.about_tmu_with_sidebar')
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
    <div class="container pb-5">
    <h1 class="tmu-text-primary tmu-page-heading "><span>Vice Chancellor's</span><span> Desk</span></h1>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="principal-card23">
                    <i class="ph-bold ph-quotes principal-quote-icon23"></i>
                    <div class="row">
                        <div class="col-md-10 mx-auto text-center">
                            <div class="d-flex justify-content-between">

                           
                            <div class="principal-image-wrapper23">
                                <img src="{{asset('/assets/img/aboutus/administration/vc.png')}}" alt="Principal" class="principal-image23" style="object-position: top;">
                                <div class="principal-image-decoration23"></div>
                            </div>
                            <div class="principal-info23">
                                <h4 class="principal-name23">Prof. (Dr.) V K Jain</h4>
                                <p class="principal-position23">
                                    <!-- <i class="ph-bold ph-briefcase me-2"></i> -->
                                    Vice Chancellor
                                </p>
                            </div>
                        </div>
                            <p class="principal-text23 text-justify">
                            The statement<span class="highlight">"Your future will be decided by what you do
                                        today" </span>is so apt for everyone joining TMU. Your destiny will be shaped by
                                    what you do during the years you are with us. It's important to differentiate
                                    between earning a degree & learning. The academic processes of TMU are tailored to
                                    learning and skill development. Many years ago Albert Einstein said <span
                                        class="highlight">"The purpose of education is to develop thinking"</span> and
                                    similarly Herbert Simon stated,<span class="highlight"> "Learning occurs from what
                                        the student does and thinks"</span>.
                                        <br>
                                        <br>
                                    The biggest challenge for both, institutions and students is to take a detour from
                                    the traditional approach of <span class="highlight">rote learning and written
                                        examination</span> which emphasized, for too long, <span
                                        class="highlight">recall and memorization</span>, This approach stifled
                                    well-structured thinking and creativity in universities. For decades, we have been functioning
                                    in classrooms like a transceiver system and evaluating students through "<span
                                        class="highlight">direct and single correct answer</span>" questions, which never
                                    tested learning or thinking. It was a test of memory.
                                    <br>
                                    <br>
                                    We can assure you of a different experience in TMU where you will deal with <span
                                        class="highlight">real-life problems and situations</span>. You will spend a good
                                    amount of time <span class="highlight">doing and thinking</span>. The academic
                                    processes at TMU will equip you with <span class="highlight">the skills and thinking needed to
                                        deal with both your professional and personal life</span>. We have a well-structured
                                    programme delivery mechanism that assures learning and a well-rounded personality. I
                                    am sure your experience will be unique and quite enriching thus preparing you to face
                                    <span class="highlight">real-life challenges in the future</span>.<br>
                                    <br>Wishing you all the best!
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