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
    <h1 class="tmu-text-primary tmu-page-heading "><span>Chancellor's</span><span> Desk</span></h1>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="principal-card23">
                    <i class="ph-bold ph-quotes principal-quote-icon23"></i>
                    <div class="row">
                        <div class="col-md-10 mx-auto text-center">
                            <div class="d-flex justify-content-between">

                           
                            <div class="principal-image-wrapper23">
                                <img src="{{asset('assets/img/aboutus/administration/chancellor-image.png')}}" alt="Principal" class="principal-image23" style="object-position: top;">
                                <div class="principal-image-decoration23"></div>
                            </div>
                            <div class="principal-info23">
                                <h4 class="principal-name23">Suresh Jain</h4>
                                <p class="principal-position23">
                                    <!-- <i class="ph-bold ph-briefcase me-2"></i> -->
                                    Chancellor
                                </p>
                            </div>
                        </div>
                            <p class="principal-text23 text-justify">
                            It is my firm belief that the harmonious development of society can be achieved by
                                    <span class="highlight p-0">the enlightenment of the individual heart, mind and soul</span>.
                                    This has become a prerequisite in today’s fast-changing world where material gains
                                    have outpaced basic human values. I am of the firm opinion that education as a
                                    powerful instrument of socioeconomic change can transform the attitude, thinking
                                    and lifestyle of the people and society. <span class="highlight p-0">Education enables
                                        flexible thinking and enhances better decision making capabilities in
                                        individuals</span>.
                                <br>
                                <br>
                                I have always dreamt of empowering society with enlightened, skilful and
                                    socially relevant citizens, which can be possible only by educating the masses. As
                                    such, we have undertaken in this noble task of reconstructing the social order by
                                    providing educational establishments, thus contributing to the development of the nation
                                    in our own humble way. <span class="highlight p-0">Teerthanker Mahaveer University has
                                    embraced the task of developing human capital in tune with the requirements of
                                        industry and society</span> by integrating the basic principles of Right
                                    Philosophy, Right Knowledge and Right Conduct in its policies and programmes.<br>
                                <br>
                                The University stands for humanism, tolerance, reason, adventure of ideas and the
                                    search for the truth. We ensure that a multitude of students study in a tolerant but
                                    encouraging environment that provides adequate liberty for individual ambition and
                                    lifestyle.<br>
                                <br>
                                The multidisciplinary approach of our curriculum focuses on <span
                                        class="highlight p-0">experiential learning</span>, leveraging of <span
                                        class="highlight p-0">ICT for better content delivery</span>, and provisions for
                                    <span class="highlight p-0">sports and extracurricular activities</span>, which are
                                    integral components of the learning process.<br>
                                <br>
                                I extend my best wishes to all the aspiring students and assure them that under the mentorship of
                                    dedicated faculty of this prestigious University, they shall be able to <span
                                        class="highlight p-0">take full advantage of the opportunities offered to them</span>.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection