@extends('layouts.university.colleges.education_with_sidebar')
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
            <h1 class="tmu-text-primary tmu-page-heading"><span>Message from the </span><span>Principal's Desk</span></h1>
            <div class="quote-box mx-auto">
                <div class="profile-image mb-2">
                    <img src="{{asset('/assets/img/principal/education/tmed_head.jpg')}}" alt="Profile Image">
                </div>
                <div class="quote-text mt-4 mt-md-0">
                    <p class="text-justify text-dark fs-14 mb-2"><i class="bi bi-quote" style="font-size:30px; color: #737373;"></i>The things taught in schools and colleges are not an education, but the means to an education. </p>
                    <p class="text-justify text-dark fs-14 mb-2">The teaching fraternity plays a pivotal role in shaping the future of the nation. The stalwart educators of yesteryears have been apostles of knowledge and self-discipline. Their commitment to excellence has set outstanding standards of education, reflected through a series of knowledge embedded with values. As the best education college in UP and top in India, we offer programmes in B.Ed., B.Sc.-B.Ed., B.A.-B.Ed., B.El.Ed., M.Ed., and Ph.D . The arrival of smart technology and internet access for young minds has not only shrunk the world but also opened new vistas for the teaching and learning process. Students have become more inquisitive and oriented toward learning. In this new scenario, teachers must update their knowledge and stay abreast of the latest developments.</p>
                    <p class="text-justify text-dark fs-14 mb-2">The new scenario demands that teachers should also update their knowledge and follow latest techniques in teaching methodology to equip students with new skills so as to judge the reliability of information received from new resources. The teacher’s role has changed from educators to facilitators. They have to adjust their lesson plan strategy to take account of interactive nature of new technology. The focus of teaching learning process is to provide insight and learning support to the students both from inside and outside the classroom environment.</p>
                    <p class="text-justify text-dark fs-14 mb-2"> We have resolved to prepare competent teachers armored with latest teaching skills to handle the students of modern age and impart quality education. The new teachers will not only be repository of knowledge but also source of inspiration to develop mentally sound and emotionally balanced students with positive attitude, who will be strong enough to accept failures boldly and turn them into the first rung of success. I am confident that my committed Faculty will prepare their pupil teachers to accept the challenges of tomorrow by facing & overcoming challenges of today. They will lend a gentle guiding hand to facilitate the students to recognize and develop their inner potential to realize their dreams.</p>
                    <p class="text-justify text-dark fs-14 mb-2">I extend heartiest wishes to teachers of today for preparing teachers of tomorrow.....</p>
                    <p class="mt-3">- Dr. Vinod Kumar Jain</p>
                    <p>Principal</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection