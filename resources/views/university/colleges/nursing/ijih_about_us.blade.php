@extends('layouts.university.colleges.nursing_with_sidebar')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/tmu-testimonial.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/tmimt.css')}}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="{{asset('assets/css/college.css')}}">
<script src="{{asset('assets/js/tmimt.js')}}"></script>

<div class="main-content">
    <div class="container">
        <section class="about-section bg-light mt-4">
            <div class="container">
                <div class="text-content p-4">
                    <h1 class="tmu-text-primary tmu-page-heading"><span>Welcome to  </span><span>International Journal of Integrated Healthcare</span></h1>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('/assets/img/banner/nursing/ijih/1.jpg')}}" class="d-block w-100 rounded-5" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('/assets/img/banner/nursing/ijih/2.jpg')}}" class="d-block w-100 rounded-5" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('/assets/img/banner/nursing/ijih/3.jpg')}}" class="d-block w-100 rounded-5" alt="">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <div class="text-content p-4">
                    <h3 class="tmu-text-primary mb-2 mt-2"><span>About </span><span> IJIH:</span></h3>
                    <p class="about-p mb-2">The TMU International Journal of Integrated Healthcare is a unique journal that promotes interdisciplinary collaboration, innovation, and inclusively in nursing and allied health. It welcomes contributions from nursing professionals and various allied health disciplines and focuses on cutting-edge research, innovative practices, and evidence-based interventions. The journal values diversity and inclusion, promoting a platform for scholars, practitioners, educators, and students to share their experiences. It emphasizes practical relevance, bridging the gap between theory and practice, and fostering a global outlook. The journal encourages dialogue and knowledge sharing among its readers.</p>
                </div>
                <div class="text-content p-4">
                    <h3 class="tmu-text-primary mb-2 mt-2"><span>Aims and </span><span> Scope:</span></h3>
                    <p class="about-p mb-4">The journal focuses on nursing and allied health, covering nursing practice, education, allied health professions, healthcare administration, patient care, health promotion, disease prevention, interdisciplinary collaboration, technology, evidence-based practice, and global health. It appeals to nurses, allied health professionals, healthcare administrators, educators, students, and policymakers, fostering interdisciplinary collaboration and knowledge advancement in these fields.</p>
                </div>
                <div class="col-lg-7 mx-auto pb-3">
                    <img src="{{ asset('/assets/img/journal/nursing/fp.webp') }}" class="card-img-top img-fluid" alt="IJIH Cover">
                </div>
                <table class="p-4 table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>Frequency</th>
                            <td>Biannual</td>
                        </tr>
                        <tr>
                            <th>e-ISSN</th>
                            <td>xxxx-xxxx</td>
                        </tr>
                        <tr>
                            <th>Publisher</th>
                            <td>Dr S P Subashini, Dean Nursing, College of Nursing, Teerthanker Mahaveer University, Moradabad</td>
                        </tr>
                        <tr>
                            <th>Chief Editor</th>
                            <td>Dr S P Subashini, Dean Nursing, College of Nursing, Teerthanker Mahaveer University, Moradabad</td>
                        </tr>
                        <tr>
                            <th>Starting Year</th>
                            <td>2025</td>
                        </tr>
                        <tr>
                            <th>Subject</th>
                            <td>Nursing</td>
                        </tr>
                        <tr>
                            <th>Language</th>
                            <td>English</td>
                        </tr>
                        <tr>
                            <th>Publication Format</th>
                            <td>Online</td>
                        </tr>
                        <tr>
                            <th>Phone No.</th>
                            <td>(+91) 591-2476844</td>
                        </tr>
                        <tr>
                            <th>Email Id</th>
                            <td><a href="mailto:tmuijih@tmu.ac.in">tmuijih@tmu.ac.in</a></td>
                        </tr>
                        <tr>
                            <th>Mobile No.</th>
                            <td>+91 63990 00660</td>
                        </tr>
                        <tr>
                            <th>Readership</th>
                            <td>Nurse Educators, Nurse Managers, Nurse Administrators, Nurse Practitioners, Staff Nurses, Nursing Students</td>
                        </tr>
                        <tr>
                            <th>Website</th>
                            <td><a href="https://www.tmu.ac.in" target="_blank">www.tmu.ac.in</a></td>
                        </tr>
                        <tr>
                            <th>Communication Address</th>
                            <td>College of Nursing, Teerthanker Mahaveer University, N.H.-9, Delhi Road, Moradabad - 244001, Uttar Pradesh</td>
                        </tr>
                    </tbody>
                </table>
                <div class="row info p-4">
                    <div class="col-md-6 col-sm-12">
                        <h3 class="tmu-text-primary mb-2 mt-2"><span>Publishing </span><span>Body:</span></h3>
                        <p><strong>Dr. S. P. Subashini </strong><br>
                            Dean Nursing<br>
                            College of Nursing,<br>
                            Teerthanker Mahaveer University ,<br>
                            N.H.-9, Delhi Road <br>
                            Moradabad - 244001, Uttar Pradesh<br>
                            Office: Ph (+91) 591-2476844<br>
                            Email: principal.rvcn@rvei.edu.in<br>
                            Mobile: +91 63990 00660 </p>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <h3 class="tmu-text-primary mb-2 mt-2"><span>Editor in </span><span>Chief:</span></h3>
                        <p><strong>Dr. S. P. Subashini </strong><br>
                            Dean Nursing<br>
                            College of Nursing,<br>
                            Teerthanker Mahaveer University ,<br>
                            N.H.-9, Delhi Road <br>
                            Moradabad - 244001, Uttar Pradesh<br>
                            Office: Ph (+91) 591-2476844<br>
                            Email: principal.rvcn@rvei.edu.in<br>
                            Mobile: +91 63990 00660 </p>
                    </div>
                </div>
                <div class="row justify-content-center pb-4">
                    <p class="text-center" style="margin-top: 20px;"><b>Email:</b> tmuijih@tmu.ac.in</p>
                </div>
            </div>
        </section>
    </div>
</div>
</div>
<!-- Bootstrap JS and dependencies -->


@endsection