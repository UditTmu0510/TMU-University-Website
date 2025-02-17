@extends('layouts.university.colleges.engineering_with_sidebar')
@section('content')

<div class="main-content">
    <div class="container">
        <div class="banner text-white text-center p-4 rounded d-flex justify-content-center" style="height: 16vh; background-color: #001055;">
            <div class="d-flex align-items-center">
                <h2 class="text-white m-0">College Overview</h2>
            </div>
        </div>

        <section class="about-section bg-light mt-4">
            <div class="container">
                <div class="text-content p-4">
                    <h1 class="tmu-text-primary tmu-page-heading"><span>Welcome to TMU </span><span> Faculty of Engineering</span></h1>
                    <p class="about-p mb-4">The <span class="highlight">Faculty of Engineering (FOE)</span>, an AICTE-approved institute with academic excellence in Engineering, Technology, and Sciences is a unique place for competent engineers. Our student-centric approach emphasises hands-on training blended with comprehensive, industry-relevant skills. 100% Placement assistance, industry collaborations, and international internship opportunities, among others, give students an edge, thus making us the Best Private Engineering College at UP.</p>
                </div>
                <div class="image-content text-center p-4">
                    <img src="{{asset('assets/img/aboutus/foe/foe_about_us.jpg')}}" class="rounded-3" alt="Learning and Teaching">
                </div>
                <div class="container p-3">
                    <p class="about-p mb-4">Our up-to-date academic curriculum gives equal weightage to the theoretical and practical knowledge, thus providing the right knowledge to the students. By integrating value-added courses with extensive practical lab work, we equip aspiring engineers with an additional learning opportunity. Our strong linkages with industries train the students by getting exposed to the latest industrial trends to become competent engineers. For getting first-hand exposure to industrial practices and trends, industrial training & visits are conducted for the students.</p>
                    <p class="about-p mb-4">The faculty of engineering has nine academic departments with around a hundred full-time faculty members. It offers programmes at Bachelor, Post-Graduate and Doctoral levels, covering major branches of engineering and sciences.</p>
                    <p class="about-p mb-4">The Wi-Fi-enabled campus is an impetus for students to enrol on MOOC programmes, helping them to diversify their knowledge frontiers. The students develop the needed personality through regular sessions of soft skills, communications, personality development, sports and other cultural activities.</p>
                    <p class="about-p mb-4"></p>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row impe-plac-row my-2">
                <div class="col-md-6 text-center my-4">
                    <div class="border-box ">
                        <a class="col-md-4" href="{{asset('/assets/img/banner_overview/engineering/iic_certificate1.jpg')}}"
                            data-lightbox="image"
                            data-zoom="true">
                            <div class="grid-inner mb-2">
                                <img src="{{asset('/assets/img/banner_overview/engineering/iic_certificate1.jpg')}}" height="300"
                                    width="450" alt="Single Image">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark">
                                        <i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <h3 class="tmu-text-primary mb-1"><span>IIC </span><span> Certificate</span></h3>
                    </div>
                </div>

                <div class="col-md-6 text-center my-4">
                    <div class="border-box">
                        <a class="col-md-4" href="{{asset('/assets/img/banner_overview/engineering/iic_certificate3.jpg')}}"
                            data-lightbox="image" data-zoom="true">
                            <div class="grid-inner mb-2">
                                <img src="{{asset('/assets/img/banner_overview/engineering/iic_certificate3.jpg')}}" height="300"
                                    width="450" alt="Single Image">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark">
                                        <i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <h3 class="tmu-text-primary mb-1"><span>IIC </span><span> Certificate</span></h3>
                    </div>
                </div>
            </div>
            <p class="about-p mb-4">Knowledge Lab, an IIT Kharagpur incubated startup, and extramarks.com are providing tailored E-learning solutions as per our curricula which enables the student to learn things in a modern way.
                We arranged remedial classes and preparation for competitive exams based on the student’s needs and aspirations. We assign all students a Mentor, to keep a personal touch to ensure proper personal & professional guidance throughout the course.
                The Wi-Fi campus is an impetus for students to enroll for MOOC programmes, helping them to diversify their knowledge frontiers. The students develop the needed personality through regular sessions of soft skills, communications, personality development, sports and other cultural activities.
                Knowledge Lab, an IIT Kharagpur incubated startup, and extramarks.com are providing tailored E-learning solutions as per our curricula which enables student to learn things in a modern way. Remedial classes and preparation for competitive exams are arranged based on the students' need and aspirations. All students are assigned a Mentor, to keep a personal touch to ensure proper personal & professional guidance throughout the course.</p>
            <p class="about-p mb-4">Additionally, students are trained in developing entrepreneurial skills & thinking. They are also encouraged to develop skills via workshops, laboratories and various skill-based learning with industrial certification. They are exposed to the latest market software like Autodesk / AutoCAD 2D & 3D, Creo, Autodesk Quantity Take off, REVIT, STADPRO for Mechanical & civil engineering and PLC & DCS programming, Solar energy, Robotics Telecommunication specific training for electrical and electronics streams along with many other latest tools to develop proficiency as an engineer.</p>
        </div>
    </div>
</div>
</div>

@endsection