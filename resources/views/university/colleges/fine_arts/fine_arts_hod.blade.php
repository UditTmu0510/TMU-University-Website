@extends('layouts.university.colleges.engineering_with_sidebar')
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
            <div class="col-lg-10">
                <div class="principal-card23">
                    <i class="ph-bold ph-quotes principal-quote-icon23"></i>
                    <div class="row">
                        <div class="col-md-10 mx-auto text-center">
                            <div class="d-flex justify-content-between">


                                <div class="principal-image-wrapper23">
                                    <img src="{{asset('/assets/img/principal/fine_arts/fine_arts_principal.jpg')}}"
                                        alt="Principal" class="principal-image23" style="object-position: top;">
                                    <div class="principal-image-decoration23"></div>
                                </div>
                                <div class="principal-info23">
                                    <h4 class="principal-name23">Mr. Ravindra Dev</h4>
                                    <p class="principal-position23">
                                        <!-- <i class="ph-bold ph-briefcase me-2"></i> -->
                                        HOD
                                    </p>
                                </div>
                            </div>
                            <p class="text-justify text-dark fs-14 mb-2"><i class="bi bi-quote"
                                    style="font-size:30px; color: #737373;"></i>Fine Arts is the study & making of
                                visual works of art. It can be in the form of dancing,
                                paintings, photography, film, architecture, etc..... <span class="highlight fs-12"
                                    style="color: #ff7900;">Anonymous</span></p>
                            <p class="principal-text23 text-justify">
                                It gives me great pleasure to see, the college make a prominent mark in the field of art
                                education and my students growing aesthetically, intellectually, culturally, and
                                spiritually. Our results have been extremely encouraging, and our students are placed in
                                a variety of esteemed creative fields in the industry, like Advertising, Art Direction,
                                Interface Design, E-learning, Web Design, Exhibition Design, Product Design,
                                Merchandising, Branding, Motion Graphics, Photography, Profession Artist, Teaching in
                                Art Profession etc.
                                <br>
                                <br>
                                Many of our students pursue higher education and get admitted to internationally
                                acclaimed design institutions in India as well as abroad. This shows the commitment of
                                our staff as well as students towards imparting international education to provide
                                global career for our students.
                                <br>
                                <br>
                                I hope as HoD to continue to grow with such excellence, and I appreciate guidance of our
                                management and participation of staff and students in the endeavor towards excellence.
                                <br>
                                <br>
                                As HoD I am very proud of the College's achievements and I am absolutely confident that
                                at TMU College of Fine Arts we not only educate every student, but cater for individual
                                needs and a highly sustainable future, thus ensuring good citizens of India.
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