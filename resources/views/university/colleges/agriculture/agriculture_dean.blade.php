@extends('layouts.university.colleges.agriculture_with_sidebar')
@section('content')

<div class="main-content mt-3 mt-sm-0 pt-2 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="tmu-text-primary tmu-page-heading"><span> From the Desk </span><span> of
                    Dean</span></h1>

            <!--<div class="col-md-4 text-center img-container">-->
            <!--    <img src="https://www.tmu.ac.in/uploads/college/tmph_head.jpg"-->
            <!--        alt="anurag-pharmacy-principal" style="height:fit-content;" height="450" width="450" alt="R.K. Dwivedi">-->
            <!--</div>-->
            <div class="col-md-12 col-lg-4 text-center img-container mb-4" style="height:fit-content;">
                <img src="{{asset('/assets/img/principal/agriculture/agriculture_principal.jpg')}}"
                    alt="praveen-dean-desk"  width="400">
            </div>
            <div class="col-md-8">
                <p class="mb-2 text-justify">Indian agriculture has witnessed a significant transformation in recent years, with the adoption of the latest trends and technologies. Precision farming, organic farming, biotechnology, and mechanization are some of the latest trends in Indian agriculture. These innovations help farmers increase crop yields, improve product quality, and reduce environmental impact. As India modernises its agricultural practices, it is poised to become a global leader in sustainable agriculture.</p>
                <p class="mb-2 text-justify">We, at the <span class="highlight"><a href="{{route('agriculture.home')}}" target="blank"> TMU’s College of Agricultural Sciences</a></span>, the top private agricultural college in UP, embrace the potential of modern agricultural technology and blend it with traditional knowledge to create innovative solutions. Our curriculum equips students with in-demand skills along with global opportunities to pursue a range of career paths. We believe that agriculture is an avenue for us to contribute to the environment and make a positive difference......</p>
            </div>
            <div class="col-md-12">
                <p class="mb-2 text-justify">Our prime aim is to provide a pragmatic approach to agriculture education. This enables our graduates to tackle farm problems in both the corporate and unorganized sectors, including the village level. Besides, we provide our students with specialized training in fields and Agro-based industries. The curriculum is designed adopting the holistic approach of learning based upon guidelines of <span class="highlight"><a href="https://icar.org.in/" target="blank">ICAR</a></span> and <span class="highlight"><a href="https://www.tmu.ac.in/blog/tmu-organizes-education-conclave-2021-to-discuss-nep-2020">NEP2020</a></span>.</p>
                <p class="mb-2 text-justify">The College of Agriculture Sciences at <span class="highlight"><a href="{{route('about.us')}}" target="blank"> TMU Moradabad</a></span> boasts an abundance of advantages. These include experienced teachers and substantial farming acreage for hands-on learning. </p>
                <p class="mb-2 text-justify">Furthermore, we have a greenhouse and polyhouse facility with trips to renowned agri-institutes. Additionally, the college has well-established modern laboratories equipped with the latest scientific equipment. Besides, students get a dynamic campus atmosphere, making us one of the top private agriculture colleges in Uttar Pradesh.</p>
                <p class="mb-2 text-justify">I hope you enjoy your visit to the website and should you wish to contact us, please find details at the contact page.</p>
                <p class="mb-2 text-justify">We are committed to producing assets, armed with the skills & knowledge to overcome modern agriculture challenges and lead the way in farming practices.</p>
                <p class="mb-2 text-justify">Study from the leading Agricultural Science College and contribute to a sustainable future. Be a part of a movement that is shaping the future of agriculture and builds a rewarding career in this field.</p>
                <div class="person-details">Dr. Praveen Kumar Jain <br>

                </div>
            </div>


        </div>



    </div>
</div>
</div>


@endsection