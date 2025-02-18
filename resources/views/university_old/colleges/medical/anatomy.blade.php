@extends('layouts.university.colleges.medical_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/college_overview.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/college.css')}}">


<div class="main-content">
    <div class="container">

        <section class="about-section bg-light mt-4">
            <div class="container">
                <div class="text-content p-4">
                    <h1 class="tmu-text-primary tmu-page-heading"><span>Department of </span><span> Anatomy </span></h1>
                    <p class="about-p mb-2">The study of Anatomy is the laying foundation in Medical Science. A clear and comprehensive knowledge of fundamental medical science is based on human anatomy, as human anatomy is the science of macro/micro structure and forms of the human body. Good health is directly related to standard structures of human anatomy and its variants. Therefore without sound knowledge of human anatomy to medical undergraduates (UG), their medical knowledge, skill, and experience will be imperfect.</p>
                    <div class="image-content text-center p-4">
                        <img src="{{asset('/assets/img/college_departments/medical/anatomy/2.jpg')}}" alt="Learning and Teaching">
                    </div>
                    <p class="about-p mb-2">Therefore the main aim of our department is to train & teach the students in a way that assists them in attaining practical understanding of this subject, which forms the firm foundation for the art of healing (medicine).</p>
                    <p class="about-p mb-2">Department of Anatomy was established in 2008 in Teerthanker Mahaveer Medical College & Research Centre, Moradabad. Our Anatomy department is one of the best departments in the state, having all the facilities related to teaching, training, learning & research activities.The Department is enthusiastic about facilitating medical education with a well-equipped dissection hall. The teaching faculty is known for their student-friendly methods of teaching. Essential as it is for modern advanced Medical Teaching Institutions, this Anatomy Department has a highly updated Museum exhibiting various types of anatomical and embryological specimens. Apart from imparting medical education to undergraduate students of various Medical, Dental, and Para-Medical courses, the Department is also recognized by the Medical Council of India to impart education to post-graduate students who specialize in Anatomy. The UGC also recognizes the Department for conducting Ph.D. courses in the field of Anatomy.</p>
                </div>
            </div>
            <div class="col-md-12 text-center">
            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{route('medical.anatomy.infra') }}" target="_blank"> Click here to view Geo Tagged Infrastructure</a>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-box p-3 mt-2" style="height: 300px!important;">
                        <h3 class="tmu-text-primary mt-2 mb-0"><span>Vision </span><span></span></h3>
                        <ul class="m-ol-list ps-5 fs-14">
                            <li>The Department aims to be a leading esteemed center for medical teaching and research across the breadth of the discipline of Anatomical Sciences.</li>
                            <li>To develop communication skills and the human touch to serve the sufferings, uphold the saying "MEDICAL PROFESSION IS NOBLE PROFESSION."</li>
                            <li>To inspire the students to develop a love for the Motherland and Patriotism.</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="section-box p-3 mt-2">
                        <h3 class="tmu-text-primary mt-2 mb-0"><span>Mission </span><span></span></h3>
                        <ul class="m-ol-list ps-5 fs-14">
                            <li>The department's overall mission is to provide a strong foundation for medical education with an emphasis on clinically relevant course material to address the crucial needs of patient care, support, and medical research.</li>
                            <li>To be an active partner in the University's efforts to excel in teaching and research, contribute to the faculty of medicine, and train competent and caring doctors for the nation.</li>
                            <li>To instill human values and medical ethics to achieve the goal of excellence in service.</li>
                        </ul>

                    </div>
                </div>

                <div class="col-md-12 mb-5 mt-3">
                    <div class="section-box p-3 mt-2">
                        <h3 class="tmu-text-primary mt-2 mb-2"><span>Objectives </span><span> </span></h3>
                        <ul class="m-ol-list ps-5 fs-14">
                            <li>To impart a solid conceptual and relevant factual foundation to undergraduate and postgraduate students taking the Anatomy Course.</li>
                            <li>To strive for excellence in the Anatomy Teaching Programmes.</li>
                            <li>To achieve international recognition for research.</li>
                            <li>To create an intellectually vibrant environment within the department.</li>
                            <li>To foster a strong sense of belongingness among staff, past, and present students.</li>
                        </ul>

                    </div>
                </div>
                <div class="col-md-12">

                </div>

                <div class="col-md-12">
                    <h2 class="tmu-text-primary mb-1 text-center"><span>Infrastructure </span><span></span></h2>
                    <p class="mt-2 mb-2">The Department provides the best possible resources to staff and students for effective teaching and learning & research.</p>
                    <h3 class="tmu-text-primary mb-0"><span>1. Dissection </span><span> Hall</span></h3>
                    <p class="text-justify mb-2">A large well-illuminated & cross-ventilated hall, having a sitting capacity of 150 students at a time. Several cooling chambers, embalming room & tanks for Cadavers are attached to the Dissection hall.</p>
                    <h3 class="tmu-text-primary mb-0"><span>2. Mussuem </span><span></span></h3>
                    <p class="text-justify mb-2">It is one of its types consisting of approximately 200 wet and dry specimens, torsos which can be dismantled and reassembled for teaching purposes. We have about 50 models, including 13 working models. We also have a series of body parts cross-sections and their labeled photographs and legends. A separate radiological section is present in the museum with a vast illustrative and descriptive collection of typical, atypical, and rare X-rays, Ultrasounds, CT scans, and MRIs.</p>
                    <h3 class="tmu-text-primary mb-0"><span>3. Histology </span><span> Laboratory</span></h3>
                    <p class="text-justify mb-2">The laboratory has a capacity of 90 students with a light source on each seat. It has an audiovisual aid, LCD, and projector to demonstrate histology slides.</p>
                    <h3 class="tmu-text-primary mb-0"><span>4. Research </span><span> Laboratory</span></h3>
                    <p class="text-justify mb-2">The lab is well-equipped with experimental histological, anthropological & other research work material.</p>
                    <h3 class="tmu-text-primary mb-0"><span>5. Demonstration </span><span> Room</span></h3>
                    <p class="text-justify mb-2">There are two demonstration rooms with a seating capacity of about 90 students each.</p>
                    <h3 class="tmu-text-primary mb-0"><span>6. Library </span><span></span></h3>
                    <p class="text-justify mb-2">There are 150+ books with the latest editions on the subject and national and international journals.</p>
                </div>

                <div class="col-md-12">
                    <div class="masonry-thumbs grid-container row row-cols-5" data-big="" data-lightbox="gallery">
                        <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/anatomy/3.jpeg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/anatomy/3.jpeg')}}" alt="Gallery Thumb 1"></a>
                        <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/anatomy/4.jpeg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/anatomy/4.jpeg')}}" alt="Gallery Thumb 2"></a>
                        <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/anatomy/5.jpeg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/anatomy/5.jpeg')}}" alt="Gallery Thumb 3"></a>
                        <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/anatomy/6.jpeg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/anatomy/6.jpeg')}}" alt="Gallery Thumb 4"></a>
                        <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/anatomy/7.jfif')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/anatomy/7.jfif')}}" alt="Gallery Thumb 6"></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
<!-- Bootstrap JS and dependencies -->

@endsection