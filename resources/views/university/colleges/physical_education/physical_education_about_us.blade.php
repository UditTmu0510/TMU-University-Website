@extends('layouts.university.colleges.physical_education_with_sidebar')
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
                    <h1 class="tmu-text-primary tmu-page-heading"><span>Welcome to TMIMT College</span><span> of
                            Physical Education</span></h1>
                    <p class="about-p mb-4">The TMIMT College of Physical Education was established in 2011
                        and approved by the National Council for Teachers Education (NCTE).
                        The college offers BPES, BPEd, MPEd and Ph.D.
                        Programme to nurture educationists and trainers to meet the rising
                        domestic and global requirements.</p>
                </div>
                <div class="image-content text-center p-4">
                    <img src="{{asset('/assets/img/aboutus/physical/Phy-E.jpg')}}" class="rounded-3" alt="TMIMT College of Physical Education">
                </div>
                <div class="container p-3">
                    <p class="about-p mb-4">Physical fitness and wellness play a key role in our society, underscoring the need for qualified professionals in physical education, yoga, health, and recreation. Excellence in sports is possible on the sound foundation of Physical Education. In the contemporary scenario, success in yoga, physical education and sports depends upon the quality of trainers who are well prepared through formal and informal acquisitions of multidimensional knowledge and training in the specialized discipline and its effective transaction. Having realized the challenges of the 21st century, Teerthanker Mahaveer University felt a genuine need to set up a most modern and well equipped Physical Education Institution with a firm commitment to producing innovative sports leaders, managers and administrators who will be proactive in facing health and fitness challenges with a mix of modern and traditional methods and approaches.
                    <p class="about-p mb-4">Curriculum and instructional aspects are designed to meet the demands of the subject, to make students more effective and efficient, and to help them conceptualize and organize different sporting events. Classroom teaching, field and track practice, community projects, seminars and workshops in a technology-aided environment are part of the curriculum. The college has well-qualified, committed and competent educators to shape the personalities of students into successful professionals.</p>
                    <p class="about-p mb-4">Experts from various fields of physical education and visiting faculty are invited regularly for enrichment lectures and intellectual guidance to the trainees. The college has spacious, furnished classrooms, contemporary laboratories, a library etc. with modern equipment for learning and research purposes. Excellent indoor and outdoor facilities are available for table tennis, basketball, volleyball, badminton, gymnastics, yoga, squash, tennis, cricket, football, hockey, skating, track & field etc.</p>
                </div>
            </div>
        </section>

    </div>
</div>
</div>
<!-- Bootstrap JS and dependencies -->
@endsection