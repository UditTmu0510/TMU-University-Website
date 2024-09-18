@extends('layouts.university.departments.about_tmu_with_sidebar')
@section('content')

<style>
    @media screen and (max-width: 912px) {
        .img-112 {
            max-height: 300px !important;
            width: auto !important;
            object-fit: contain; /* Ensures the image maintains aspect ratio without stretching */
        }
    }
</style>
<div class="main-content">
    <div class="container">
                    
                        <div class="row">
                            <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span>Chancellor</span>
                                <span> Desk</span>
                            </h1>

                            <div class="col-lg-4 col-md-12 col-sm-12 text-center mb-3">
                                <img src="{{asset('/assets/img/aboutus/administration/chancellor-image.png')}}" class="w-100 img-112 mx-auto d-block" alt="">
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12">
                                <p class="person-quote px-4 px-md-5">
                                    <!-- <i class="bi bi-quote"></i> -->
                                    <!-- &emsp;&emsp; -->
                                    It is my firm belief that harmonious development of the society can be achieved by
                                    <span class="highlight">enlightenment of the individual heart, mind and soul</span>.
                                    This has become a prerequisite in today’s fast changing world where material gains
                                    have out-placed basic human values. I am of the firm opinion that education as a
                                    powerful instrument of socio-economic change can transform the attitude, thinking
                                    and life style of the people and society. <span class="highlight">Education enables
                                        flexible thinking and better decision making capabilities in
                                        individuals</span>.<br>
                                    I have always dreamt of empowering the society with enlightened, skillful and
                                    socially relevant citizens, which can be possible only by educating the masses. As
                                    such, we initiated in this benign task of reconstructing the social order by
                                    providing educational establishments, thus contributing to the development of nation
                                    in our own humble way. <span class="highlight">Teerthanker Mahaveer University has
                                        taken the task of developing human capital in tune with the requirements of
                                        industry and the society</span> by integrating the basic principles of Right
                                    Philosophy, Right Knowledge and Right Conduct in its policies and programmes.<br>
                                    The University stands for humanism, tolerance, reason, adventure of ideas and the
                                    search of truth. We ensure that multitude of students study in a tolerant but
                                    encouraging environment that provides adequate liberty for individual ambition and
                                    lifestyle.<br>
                                    The multidisciplinary approach of our curriculum focuses on <span
                                        class="highlight">experiential learning</span>, leveraging of <span
                                        class="highlight">ICT for better content delivery</span>, and provisions for
                                    <span class="highlight">sports and extracurricular activities</span>, which are
                                    integral components of the learning process.<br>
                                    I extend my best wishes to all the aspirants and assure that under the mentorship of
                                    dedicated faculty of this prestigious University, they shall be able to <span
                                        class="highlight">take full advantage of opportunities offered to them</span>.

                                    <!-- <br> -->
                                    <!-- <img src="https://signature.freefire-name.com/img.php?f=7&t=Suresh%20Jain" alt="" class="w-25"> -->
                                <div class="person-details float-right">Suresh Jain <br><span>(कुलाधिपति)</span>

                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

</div>
</div>
@endsection