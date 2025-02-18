@extends('layouts.university.colleges.agriculture_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/college_overview.css')}}">


<div class="main-content">
    <div class="container">
        <div class="banner text-white text-center p-4 rounded"
            style="height: 20vh; background-color: #001055;">
            <h2 style="color: #fff; padding:1.5rem;">College Overview</h2>
        </div>

        <section class="about-section bg-light mt-4">
            <div class="container">
                <div class="text-content p-4">
                    <h1 class="tmu-text-primary tmu-page-heading"><span>Welcome to TMU College of </span><span> Agriculture Sciences</span></h1>
                    <p class="about-p mb-3">The <span class="highlight">College of Agriculture Sciences, </span> established in 2014, stands as a beacon of sustainable practices, student empowerment, and pioneering research in the realm of agriculture. Our unwavering commitment to excellence has positioned us as the top private agricultural college in Uttar Pradesh. Guided by the recommendations of the Vth Deans Committee of the Indian Council of Agricultural Research (ICAR), we have meticulously crafted a curriculum comprising each aspect of Agriculture. It is with great pride that we proclaim our accreditation by ICAR, which is a mark of quality and excellence in the field of agricultural education.</p>
                </div>
                <div class="image-content text-center p-4">
                    <img src="{{asset('assets/img/aboutus/agriculture/agriculture_about_us.jpg')}}" alt="Agri overview img">
                </div>
                <div class="container p-3">
                    <p class="about-p mb-4">This programme is an important step towards an improvement in agricultural practices for diversified cropping areas of the country including precision farming and organic farming. Modern Technologies and tools are imparted for improvement in economic farm production with paramount importance of environment protection and sustainable practices. Skills enhancing courses have been introduced in the curriculum like nursery management, mushroom cultivation, commercial horticulture, commercial bee- keeping, food processing, organic farming and bio- dynamic farming etc. Regular visits to Agri-business & Agriclinic centre, dairy and poultry farms, Integrated Pest Management Institute, Krishi Vigyan Kendra and Organic farming fields as well as Kisan Mela are arranged to enhance knowledge about novel inventions in the agriculture fields such as machinery, pesticides and seeds etc to develop Agripreneur skills among the students. The productive exposure of farming operations throughout the year are carried out by students under the guidance of faculty teaching the specified course.</p>
                    <p class="about-p mb-4">The farm provides opportunities to learn and gain experience in Organic farming, Apiculture, vermi composting, Horticulture, plant pathogens, Soil Analysis and Extension activities. Beyond professional practices, the college organizes guest lectures, invite experts in their respective areas for providing update exposure to students. All faculty members are highly qualified with Ph.D & ICAR-NET with adequate experience in their respective field of specializations. Agriculture graduates have multiple opportunities in banks, seed and fertilizer companies, insurance sector, dairy consultancy areas and pesticides companies etc. They can also join public sector enterprises as Agriculture Research Scientists, food inspectors, Instructors etc. and they can also pursue higher studies in their preferred specialization.</p>
                </div>
            </div>
    </div>
    </section>

</div>

</div>
<!-- Bootstrap JS and dependencies -->
@endsection