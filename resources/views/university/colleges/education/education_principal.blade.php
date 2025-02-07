@extends('layouts.university.colleges.education_with_sidebar')
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
                                    <img src="{{asset('/assets/img/principal/education/tmed_head.jpg')}}"
                                        alt="Principal" class="principal-image23" style="object-position: top;">
                                    <div class="principal-image-decoration23"></div>
                                </div>
                                <div class="principal-info23">
                                    <h4 class="principal-name23">Dr. Vinod Kumar Jain</h4>
                                    <p class="principal-position23">
                                        <!-- <i class="ph-bold ph-briefcase me-2"></i> -->
                                        Principal
                                    </p>
                                </div>
                            </div>
                            <p class="text-justify text-dark fs-14 mb-2"><i class="bi bi-quote"
                                    style="font-size:30px; color: #737373;"></i>The things taught in schools and
                                colleges are not an education, but the means to an education. </p>
                            <p class="principal-text23 text-justify">The teaching fraternity plays a pivotal role in
                                shaping the future of the nation. The stalwart educators of yesteryears have been
                                apostles of knowledge and self-discipline. Their commitment to excellence has set
                                outstanding standards of education, reflected through a series of knowledge embedded
                                with values. As the best education college in UP and top in India, we offer programmes
                                in B.Ed., B.Sc.-B.Ed., B.A.-B.Ed., B.El.Ed., M.Ed., and Ph.D . The arrival of smart
                                technology and internet access for young minds has not only shrunk the world but also
                                opened new vistas for the teaching and learning process. Students have become more
                                inquisitive and oriented toward learning. In this new scenario, teachers must update
                                their knowledge and stay abreast of the latest developments.
                                <br>
                                <br>The new scenario demands that teachers should also update their knowledge and follow
                                latest techniques in teaching methodology to equip students with new skills so as to
                                judge the reliability of information received from new resources. The teacher’s role has
                                changed from educators to facilitators. They have to adjust their lesson plan strategy
                                to take account of interactive nature of new technology. The focus of teaching learning
                                process is to provide insight and learning support to the students both from inside and
                                outside the classroom environment.
                                <br>
                                <br>We have resolved to prepare competent teachers armored with latest teaching skills
                                to handle the students of modern age and impart quality education. The new teachers will
                                not only be repository of knowledge but also source of inspiration to develop mentally
                                sound and emotionally balanced students with positive attitude, who will be strong
                                enough to accept failures boldly and turn them into the first rung of success. I am
                                confident that my committed Faculty will prepare their pupil teachers to accept the
                                challenges of tomorrow by facing & overcoming challenges of today. They will lend a
                                gentle guiding hand to facilitate the students to recognize and develop their inner
                                potential to realize their dreams.
                                <br>
                                <br>I extend heartiest wishes to teachers of today for preparing teachers of
                                tomorrow.....
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