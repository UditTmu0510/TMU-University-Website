@extends('layouts.university.departments.about_tmu_with_sidebar')
@section('content')
<!-- sidebar start -->


<link rel="stylesheet" href="{{asset('/assets/css/about_university.css')}}" />

<!-- Sidebar End -->

<div class="main-content">
  <div class="container">
    <section>
      <div class="container">
        <div class="row">
          <h1 class="tmu-text-primary tmu-page-heading mb-0 mb-md-3"><span>About the</span><span> University</span></h1>

          <div class="col-lg-12">
            <h4 class="sublime text-justify mt-2 px-0 px-lg-5">Teerthanker Mahaveer University, a prestigious institution dedicated to academic excellence, was established by an ‘Act’ (No. 30) of 2008 of the Government of Uttar Pradesh and approved by the <span class="highlight p-0"><a href="https://www.ugc.gov.in/" target="_blank">University Grants Commission (UGC)</a></span> in 2008, vide letter No. F. 9-31/2008 (CPP-1) dated October 2008.</h4>
          </div>
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-4 mb-2">
                <a class="grid-item" href="{{asset('/assets/img/aboutus/banner/about-img.webp')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/aboutus/banner/about-img.webp')}}" class="d-block mx-auto" alt="Gallery Thumb 1"></a>
              </div>
              <div class="col-lg-8 mt-2 mb-2">
                <p class="text-justify fs-14 mb-2">Located 144 km from New Delhi along National Highway 9, TMU upholds the ideals of Lord Mahaveer—Right Philosophy, Right Knowledge, and Right Conduct in every aspect of its activities. The university is a leading destination for world-class education.</p>
                <p class="text-justify fs-14 mb-2">As a multi-disciplinary varsity, we offer
                  career-oriented programmes
                  at all levels, i.e., UG, PG, and Doctoral degrees across diverse streams such as <span class="highlight p-0"><a href="{{route('medical.home')}}" target="_blank">Medical</a>, <a href="{{route('dental.home')}}" target="_blank">Dental</a>, <a href="{{route('pharmacy.home')}}" target="_blank">Pharmacy</a>, <a href="{{route('nursing.home')}}" target="_blank">Nursing</a>, <a href="{{route('paramedical.home')}}" target="_blank">Paramedical Sciences</a>, <a href="{{route('physiotherapy.home')}}" target="_blank">Physiotherapy</a>, <a href="#" target="_blank">Hospital Administration</a>,
                    <a href="{{route('physical_education.home')}}" target="_blank">Physical Education</a>, <a href="{{route('tmimt.home')}}" target="_blank">Management</a>,<a href="{{route('ccsit.home')}}" target="_blank">Computer Sciences</a>, <a href="{{route('engineering.home')}}" target="_blank">Engineering</a>,<a href="{{route('education.home')}}" target="_blank"> Education</a>,
                    <a href="{{route('law.home')}}" target="_blank">Law</a>, <a href="{{route('fine_arts.home')}}" target="_blank">Fine Arts</a>, <a href="{{route('agriculture.home')}}" target="_blank">Agriculture</a></span> and <span class="highlight p-0"><a href="{{route('jain.studies.home')}}" target="_blank">Jain Studies</a></span> to meet the rising aspirations of the youth.
                </p>

                <p class="text-justify fs-14 mb-2">TMU provides a unique environment for students to
                  grow under the guidance of experienced academicians and acquire the creative and technical skills required to make them industry ready. Our brilliant faculty and staff form a dedicated team committed to the
                  mission of the University. Being a dynamic, research-oriented University, we are devoted to developing life-saving discoveries to address some of the most pressing global challenges.</p>

                <p class="text-justify fs-14 mb-2">Education at TMU is not just about books and
                  classrooms, but also about personality development and honing specialized skills. We provide an environment conducive to
                  teaching and learning supported by innovative practices. </p>
                <p class="text-justify fs-14 mb-4"> Being one of the best private universities,, we have state-of-the-art laboratories and research facilities, well-planned residential space, and an excellent ecosystem for extra-curricular activities. The campus is Wi-Fi enabled and uses advanced technology to
                  impart education. Due to the availability of these essential building blocks, TMU is in a unique position to support the development of students in such a way that they gain lifelong learning skills and become competent professionals.</p>
              </div>
              <!--<div class="col-md-12">-->

              <!--</div>-->
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="custom-box">
              <h2 class="text-center text-uppercase text-white mt-4">Our Colleges</h2>
              <div class="row">
                <div class="col-lg-6 col-xl-6">
                  <ul class="custom-list ps-0" style="font-size: 14px; line-height: 30px; ">
                    <li><a href="{{route('medical.home')}}"><i class="fa-solid fa-arrow-right text-break"></i>&nbsp;Teerthanker Mahaveer Medical College & Research Centre</li></a>
                    <li><a href="{{route('dental.home')}}"><i class="fa-solid fa-arrow-right text-break"></i>&nbsp;Teerthanker Mahaveer Dental College & Resaerch Centre</li></a>
                    <li><a href="{{route('nursing.home')}}"><i class="fa-solid fa-arrow-right text-break"></i>&nbsp;Teerthanker Mahaveer College of Nursing</li></a>
                    <li><a href="{{route('pharmacy.home')}}"><i class="fa-solid fa-arrow-right text-break"></i>&nbsp;Teerthanker Mahaveer College of Pharmacy</li></a>
                    <li><a href="{{route('paramedical.home')}}"><i class="fa-solid fa-arrow-right text-break"></i>&nbsp;Teerthanker Mahaveer University College of Paramedical Sciences</li></a>
                    <li><a href="{{route('physiotherapy.home')}}"><i class="fa-solid fa-arrow-right text-break"></i>&nbsp;Department of Physiotherapy</li></a>
                    <li><a href="{{route('tmimt.home')}}"><i class="fa-solid fa-arrow-right text-break"></i>&nbsp;TMIMT College of Management</li></a>
                  </ul>
                </div>
                <div class="col-lg-6 col-xl-6">
                  <ul class="custom-list ps-0" style="font-size: 14px; line-height: 30px; ">
                    <li><a href="{{route('law.home')}}"><i class="fa-solid fa-arrow-right text-break"></i>&nbsp;Teerthanker Mahaveer College of Law and Legal Studeis</li></a>
                    <li><a href="{{route('ccsit.home')}}"><i class="fa-solid fa-arrow-right text-break"></i>&nbsp;College of Computing Sciences & IT</li></a>
                    <li><a href="{{route('engineering.home')}}"><i class="fa-solid fa-arrow-right text-break"></i>&nbsp;Teerthanker Mahaveer University College of Engineering</li></a>
                    <li><a href="{{route('fine_arts.home')}}"><i class="fa-solid fa-arrow-right text-break"></i>&nbsp;College of Fine Arts</li></a>
                    <li><a href="{{route('education.home')}}"><i class="fa-solid fa-arrow-right text-break"></i>&nbsp;Faculty of Education</li></a>
                    <li><a href="{{route('physical_education.home')}}"><i class="fa-solid fa-arrow-right text-break"></i>&nbsp;TMIMT College of Physical Education</li></a>
                    <li><a href="{{route('agriculture.home')}}"><i class="fa-solid fa-arrow-right text-break"></i>&nbsp;Teerthanker Mahaveer College of Agriculture Sciences</li></a>
                    <li><a href="{{route('jain.studies.home')}}"><i class="fa-solid fa-arrow-right text-break"></i>&nbsp;Centre for Jain Studies</li></a>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <div class="">
      <h2 class="tmu-text-primary text-center mt-4"><span>Message from the </span><span>Chancellor</span></h2>
      <div class="quote-box mx-auto">
        <div class="profile-image">
          <img src="{{asset('/assets/img/aboutus/suresh_jain_tmu.webp')}}" alt="Profile Image">
        </div>
        <div class="quote-text mt-4 mt-md-0">
          <h4> <i class="bi bi-quote" style="font-size:50px; color: #737373;"></i>It is my firm belief that the harmonious development of society can be achieved by the enlightenment of the individual's heart, mind and soul through right philosophy, right knowledge and right conduct. This has become a prerequisite in today’s fast-changing world where material gains have place displaced basic human values. <br><a href="{{ route('chancellor.desk') }}" class="fs-14 unique-link">Read More</a></h4>
          <p class="mt-3">- Shri Suresh Jain</p>
          <p>Chancellor</p>
          <!-- <div class="text-center mt-4">
            
          </div> -->
        </div>
      </div>
    </div>

    <section>
      <div class="container mt-4">
        <h2 class="tmu-text-primary mt-3 text-center"> <span>The Journey </span><span>of TMU </span></h2>
        <div class="row">
          <div class="center-table" style="font-family:poppins;">
            <table class="table">
              <tbody>
                <tr>
                  <td>
                    <h2 style="color:#001055;"><strong style="font-weight:600;">2001</strong></h2>
                  </td>
                  <td style="text-align:justify; margin-bottom:1rem; font-size:14px;"><b style="color:#FF7900;">TMIMT College of Management</b><br>
                    Established in 2001, TMIMT offers a range of management programmes including BBA, MBA, B.Com., and Ph.D., fostering excellence in business education.
                  </td>
                </tr>
                <tr>
                  <td>
                    <h2 style="color:#001055;"><strong style="font-weight:600;">2003</strong></h2>
                  </td>
                  <td style="text-align:justify; margin-bottom:1rem; font-size:14px;"><b style="color:#FF7900;">Faculty of Education</b><br>
                    Founded in 2003, the Faculty of Education provides comprehensive programmes such as B.Ed., M.Ed., and Ph.D., contributing to the advancement of educational practices.
                </tr>
                <tr>
                  <td>
                    <h2 style="color:#001055;"><strong style="font-weight:600;">2005</strong></h2>
                  </td>
                  <td style="text-align:justify; margin-bottom:1rem; font-size:14px;"><b style="color:#FF7900;">Teerthanker Mahaveer Dental College & Research Centre</b><br>
                    Inaugurated in 2005, the Dental College is a hub of dental excellence, offering BDS, MDS, and PhD programmes in oral healthcare.
                </tr>
                <tr>
                  <td>
                    <h2 style="color:#001055;"><strong style="font-weight:600;">2007</strong></h2>
                  </td>
                  <td style="text-align:justify; margin-bottom:1rem; font-size:14px; "><b style="color:#FF7900;">Teerthanker Mahaveer Hospital</b><br>
                    Established in 2007, the hospital, with more than 800 beds, caters to the medical needs of a vast area, embodying TMU's commitment to healthcare accessibility.
                </tr>
                <tr>
                  <td>
                    <h2 style="color:#001055;"><strong style="font-weight:600;">2008</strong></h2>
                  </td>
                  <td class="text-justify fs-14" class="mb-3"><b style="color:#FF7900;">Teerthanker Mahaveer Medical College & Research Centre</b><br>
                    Founded in 2008, the Medical College offers MBBS, MD/MS, M.Sc. Medical, and Ph.D. programmes, shaping future medical professionals.
                </tr>
                <tr>
                  <td>
                    <h2 style="color:#001055;"><strong style="font-weight:600;">2008</strong></h2>
                  </td>
                  <td class="text-justify fs-14" class="mb-3"><b style="color:#FF7900;">Establishment of Teerthanker Mahaveer University</b><br>
                    The Teerthanker Mahaveer University was established by an 'Act' (No. 30) of 2008 of the Government of Uttar Pradesh and was approved by the University Grants Commission (UGC), in 2008, vide letter No. F. 9-31/2008 (CPP-1) dated October, 2008.
                </tr>
                <tr>
                  <td>
                    <h2 style="color:#001055;"><strong style="font-weight:600;">2008</strong></h2>
                  </td>
                  <td class="text-justify fs-14" class="mb-3"><b style="color:#FF7900;">Teerthanker Mahaveer College of Pharmacy</b><br>
                    Established in 2008, the College of Pharmacy offers a diverse array of programmes, equipping students with skills for patient care and healthcare systems.
                </tr>
                <tr>
                  <td>
                    <h2 style="color:#001055;"><strong style="font-weight:600;">2008</strong></h2>
                  </td>
                  <td style="text-align:justify; font-size:14px; " class="mb-3"><b style="color:#FF7900;">Teerthanker Mahaveer College of Engineering</b><br>
                    Inaugurated in 2008, the College offers AICTE-approved programmes in various engineering disciplines, fostering academic excellence and innovation.
                </tr>
                <tr>
                  <td>
                    <h2 style="color:#001055;"><strong style="font-weight:600;">2009</strong></h2>
                  </td>
                  <td style="text-align:justify; font-size:14px; " class="mb-3"><b style="color:#FF7900;">Teerthanker Mahaveer College of Nursing</b><br>
                    Formed in 2009, the College offers a spectrum of nursing programmes, preparing students for diverse roles in the healthcare sector.
                </tr>
                <tr>
                  <td>
                    <h2 style="color:#001055;"><strong style="font-weight:600;">2010</strong></h2>
                  </td>
                  <td class="text-justify fs-14" class="mb-3"><b style="color:#FF7900;">Teerthanker Mahaveer College of Paramedical Sciences</b><br>
                    Introduced in 2010, the College offers programmes in medical lab technology, X-ray technology, optometry, forensic science, and more, catering to pre-hospital emergency services.
                </tr>
                <tr>
                  <td>
                    <h2 style="color:#001055;"><strong style="font-weight:600;">2010</strong></h2>
                  </td>
                  <td class="text-justify fs-14" class="mb-3"><b style="color:#FF7900;">Department of Physiotherapy</b><br>
                    Founded in 2010, the College offers programmes aimed at helping patients maintain, recover, or improve their physical abilities, contributing to rehabilitative medicine.
                </tr>
                <tr>
                  <td>
                    <h2 style="color:#001055;"><strong style="font-weight:600;">2010</strong></h2>
                  </td>
                  <td class="text-justify fs-14" class="mb-3"><b style="color:#FF7900;">Teerthanker Mahaveer College of Law & Legal Studies</b><br>
                    Established in 2010, the College attracts bright minds aspiring to contribute meaningfully to the legal profession, offering integrated LL.B. programmes and a Ph.D. in law.
                </tr>
                <tr>
                  <td>
                    <h2 style="color:#001055;"><strong style="font-weight:600;">2010</strong></h2>
                  </td>
                  <td class="text-justify fs-14" class="mb-3"><b style="color:#FF7900;">University Polytechnic</b><br>
                    Initiated in 2010, the Polytechnic offers diploma programmes in various engineering disciplines, nurturing skilled personnel for the industrial sector.
                </tr>
                <tr>
                  <td>
                    <h2 style="color:#001055;"><strong style="font-weight:600;">2011</strong></h2>
                  </td>
                  <td style="text-align:justify;font-size:14px;" class="mb-3"><b style="color:#FF7900;">College of Fine Arts</b><br>
                    Established in 2011, the College offers programmes in fine arts, building on historical perspectives, and nurturing creativity in students.
                </tr>
                <tr>
                  <td>
                    <h2 style="color:#001055;"><strong style="font-weight:600;">2011</strong></h2>
                  </td>
                  <td class="text-justify fs-14" class="mb-3"><b style="color:#FF7900;">TMIMT College of Physical Education</b><br>
                    Founded in 2011, the College offers programmes in physical education, emphasising the importance of fitness and wellness in society.
                </tr>
                <tr>
                  <td>
                    <h2 style="color:#001055;"><strong style="font-weight:600;">2012</strong></h2>
                  </td>
                  <td style="text-align:justify;font-size:14px;" class="mb-3"><b style="color:#FF7900;">Centre for Jain Studies</b><br>
                    Established in 2012, the College imparts moral education, conducts comparative studies of different philosophies, and undertakes research in religious studies.
                </tr>
                <tr>
                  <td>
                    <h2 style="color:#001055;"><strong style="font-weight:600;">2014</strong></h2>
                  </td>
                  <td class="text-justify fs-14" class="mb-3"><b style="color:#FF7900;">College of Computing Sciences & IT</b><br>
                    Established in 2014, the College offers programmes in computer science, animation, and IT, providing essential education to aspiring technologists.
                </tr>
                <tr>
                  <td>
                    <h2 style="color:#001055;"><strong style="font-weight:600;">2014</strong></h2>
                  </td>
                  <td class="text-justify fs-14" class="mb-3"><b style="color:#FF7900;">Teerthanker Mahaveer College of Agriculture Sciences</b><br>
                    Inaugurated in 2014, the College focuses on core areas of agriculture and environmental studies, aligning with the recommendations of the Vth Deans Committee of ICAR.
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

    <!-- Key Facts -->
    <section>
      <div class="container mb-3 mt-5 w-100">
        <h2 class="tmu-text-primary mt-0 my-md-5 text-center"><span>Numbers That </span><span> Define Us</span></h2>
        <div class="row essential-section">
          <div class="col-lg-3 col-sm-6 text-center">
            <i class="fa-solid fa-user-graduate" style="font-size:8vh; color:#001055; margin-top:0.655rem;"></i>
            <div class="counter counter-lined" style="color:#000; font-size:35px;">16K+</div>
            <p style="color:#000;">Students</p>
          </div>

          <div class="col-lg-3 col-sm-6 text-center">
            <i class="fa-solid fa-handshake" style="font-size:8vh; color:#001055; margin-top:0.655rem;"></i>
            <div class="counter counter-lined" style="color:#000; font-size:35px;">85%</div>
            <p style="color:#000;">Placements</p>
          </div>

          <div class="col-lg-3 col-sm-6 text-center">
            <i class="fa-solid fa-people-group" style="font-size:8vh; color:#001055; margin-top:0.655rem;"></i>
            <div class="counter counter-lined" style="color:#000; font-size:35px;">800+</div>
            <p style="color:#000;">Faculties</p>
          </div>

          <div class="col-lg-3 col-sm-6 text-center">
            <i class="fa-solid fa-certificate" style="font-size:8vh; color:#001055; margin-top:0.655rem;"></i>
            <div class="counter counter-lined" style="color:#000; font-size:35px;">2800+</div>
            <p style="color:#000;">Patents</p>
          </div>
        </div>

      </div>
    </section>
    <!--  -->

    <!-- Campus Initiative  -->
    <div class="container mt-2">
      <div style="text-align:center;">
        <h2 class="tmu-text-primary text-center mt-5"><span>TMU's Campus </span><span>Initiatives</span></h2>
      </div>
    </div>


    <div class="container">
      <div id="carouselExample" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <!-- Remove the carousel controls -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <article class="entry event col-12 mb-4">
              <!-- Content for Solar Energy -->
              <div class="grid-inner row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                <div class="col-md-4 col-sm-12 mb-md-0">

                  <img src="{{asset('/assets/img/aboutus/campus_facilities/Water_Recycling_System.webp')}}" alt="Water Recycling System at TMU" class="rounded-2 h-100 object-cover">
                  <div class="bg-overlay">
                  </div>

                </div>
                <div class="col-md-8 col-sm-12 p-4">
                  <div class="entry-title nott">
                    <h4 class="mb-0 tmu-text-primary mt-2"><span>Preserving Water Resources</span></h4>
                  </div>
                  <div class="entry-content my-3">
                    <p class="mb-0">Our advanced water recycling system efficiently captures and treats wastewater from campus facilities, ensuring that water is reused for landscaping and other non-potable purposes. This innovative system helps conserve water resources and minimises our impact on the environment.</p>
                    &nbsp;
                  </div>
                </div>
              </div>
            </article>
          </div>
          <div class="carousel-item">
            <article class="entry event col-12 mb-4">
              <!-- Content for Waste Recycling System -->
              <div class="grid-inner row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                <div class="col-md-4 col-sm-12 mb-md-0">

                  <img src="{{asset('/assets/img/aboutus/campus_facilities/solar_energy.webp')}}" alt="Solar energy at TMU" class="rounded-2 h-100 object-cover">
                  <div class="bg-overlay">
                  </div>

                </div>
                <div class="col-md-8 col-sm-12 p-4">
                  <div class="entry-title nott">
                    <h4 class="mb-0 tmu-text-primary mt-2"><span>Adopting Clean Energy Solutions</span></h4>
                  </div>
                  <div class="entry-content my-3">
                    <p class="mb-0">TMU is proud to utilise solar energy as a primary source of power for our campus. By installing solar panels on buildings and other structures, we harness renewable energy from the sun, reducing our reliance on traditional electricity sources and decreasing our carbon footprint.</p>
                  </div>
                </div>
              </div>
            </article>
          </div>
          <div class="carousel-item">
            <article class="entry event col-12 mb-4">
              <!-- Content for Waste Recycling System -->
              <div class="grid-inner row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                <div class="col-md-4 col-sm-12 mb-md-0">

                  <img src="{{asset('/assets/img/aboutus/campus_facilities/eco_green_campus.webp')}}" alt="Eco green campus at TMU" class="rounded-2 h-100 object-cover">
                  <div class="bg-overlay">
                  </div>

                </div>
                <div class="col-md-8 col-sm-12 p-4">
                  <div class="entry-title nott">
                    <h4 class="mb-0 tmu-text-primary mt-2"><span>Creating Sustainable Landscapes</span></h4>
                  </div>
                  <div class="entry-content my-3">
                    <p class="mb-0">Our commitment to greenery enhancement involves the cultivation of native plant species, the creation of green spaces, and the implementation of sustainable landscaping practices. These efforts not only beautify our campus but also promote biodiversity, improve air quality, and provide a peaceful environment for studies.</p>
                  </div>
                </div>
              </div>
            </article>
          </div>
        </div>
        <!-- Keep only the carousel indicators at the bottom -->
        <ol class="carousel-indicators list-style-none" style="bottom: 10px;">
          <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#carouselExample" data-bs-slide-to="1"></li>
          <li data-bs-target="#carouselExample" data-bs-slide-to="2"></li>
        </ol>
      </div>
    </div>
    <!-- ends Here -->

    <!-- Campus Facilities Starts Here-->
    <section>
      <div class="container-fluid d-none d-md-block">

        <div style="text-align:center; margin-top:2rem;">
          <h2 class="tmu-text-primary"><span>Campus </span><span>Facilities</span></h2>
          <!-- <p style="text-align:center; padding:0 30px;" class="mb-4">Many students at TMU reside in university dormitories, apartments, and townhouses, as well as at the TMU Inn and Conference Center. Additionally, there are Greek houses available for six fraternities and sororities. New students are assured housing at TMU. </p> -->
        </div>
      </div>
      <div class="container d-none d-md-block">
        <div class="row justify-content-center">
          <div class="col-md-3 text-center">

            <img class="img-fluid mb-2" src="{{asset('/assets/img/aboutus/campus_facilities/Hospital_02.webp')}}" alt="Image">

            <h4 class="mb-0 tmu-text-primary"><span>Hospital Services</span></h4>
            <p>Access to Comprehensive Medical Care</p>
          </div>
          <div class="col-md-3 text-center">

            <img class="img-fluid mb-2" src="{{asset('/assets/img/aboutus/campus_facilities/Hostel.webp')}}" alt="Image">

            <h4 class="mb-0 tmu-text-primary"><span>Hostel Accommodation</span></h4>
            <p>Comfortable Residency for Students</p>
          </div>
          <div class="col-md-3 text-center">

            <img class="img-fluid mb-2" src="{{asset('/assets/img/aboutus/campus_facilities/Faculty_Residences.webp')}}" alt="Image">

            <h4 class="mb-0 tmu-text-primary"><span>Faculty Residences</span></h4>
            <p>Faculty Accommodation Within Campus</p>
          </div>
          <div class="col-md-3 text-center">

            <img class="img-fluid mb-2" src="{{asset('/assets/img/aboutus/campus_facilities/Indoor.webp')}}" alt="Image">

            <h4 class="mb-0 tmu-text-primary"><span>Indoor Stadiums</span></h4>
            <p>Modern Sports Facilities</p>
          </div>
          <div class="col-md-3 text-center">

            <img class="img-fluid mb-2" src="{{asset('/assets/img/aboutus/campus_facilities/Gym.webp')}}" alt="Image">

            <h4 class="mb-0 tmu-text-primary"><span>Gym Facilities (for Both Girls and Boys)</span></h4>
            <p>Fitness Centres and Facilities</p>
          </div>
          <div class="col-md-3 text-center">

            <img class="img-fluid mb-2" src="{{asset('/assets/img/aboutus/campus_facilities/Outdoor.webp')}}" alt="Image">

            <h4 class="mb-0 tmu-text-primary"><span> Outdoor Stadiums</span></h4>
            <p>Modern Sports Facilities</p>
          </div>
          <div class="col-md-3 text-center">

            <img class="img-fluid mb-2" src="{{asset('/assets/img/aboutus/campus_facilities/CCTV.webp')}}" alt="Image">

            <h4 class="mb-0 tmu-text-primary"><span>24/7 Surveillance System</span></h4>
            <p>Ensuring Safety with more than 3600 Night Vision Cameras</p>
          </div>
          <div class="col-md-3 text-center">

            <img class="img-fluid mb-2" src="{{asset('/assets/img/aboutus/campus_facilities/E_lobby.webp')}}" alt="Image">

            <h4 class="mb-0 tmu-text-primary mt-2"><span>E-Lobby (Food Court)</span></h4>
            <p>Varied Dining Choices at E-Lobby</p>
          </div>
        </div>
      </div>
    </section>

    <div class="section bg-transparent my-0 pt-2 pb-4 py-lg-5 d-block d-md-none">
      <div class="container">
        <div style="text-align:center; margin-top:2rem;">
          <h2 class="tmu-text-primary"><span> Campus </span><span> Facilities</span></h2>
          <!-- <p class="text-justify px-2 px-md-4">Many students at TMU reside in university dormitories, apartments, and townhouses, as well as at the TMU Inn and Conference Center. Additionally, there are Greek houses available for six fraternities and sororities. New students are assured housing at TMU. </p> -->
        </div>
        <div class="container">
          <div id="carouselExample" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <!-- Remove the carousel controls -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <article class="entry event col-12 col-md-6 mb-4">
                  <!-- Content for Solar Energy -->
                  <div class="grid-inner row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                    <div class="col-md-12 col-sm-12 mb-md-0">

                      <img src="{{asset('/assets/img/aboutus/campus_facilities/Hospital_02.webp')}}" alt="Inventore voluptates velit totam ipsa tenetur" class="rounded-2 h-100 object-cover">
                      <div class="bg-overlay">
                      </div>

                    </div>
                    <div class="col-md-12 col-sm-12 p-4">
                      <div class="entry-title nott">
                        <h4 class="mb-0 tmu-text-primary"><span>Hospital Services</span></h4>
                        <p>Access to Comprehensive Medical Care</p>
                        <p></p>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div class="carousel-item">
                <article class="entry event col-12 col-md-6 mb-4">
                  <!-- Content for Waste Recycling System -->
                  <div class="grid-inner row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                    <div class="col-md-4 col-sm-12 mb-md-0">

                      <img src="{{asset('/assets/img/aboutus/campus_facilities/Hostel.webp')}}" alt="Inventore voluptates velit totam ipsa tenetur" class="rounded-2 h-100 object-cover">
                      <div class="bg-overlay">
                      </div>

                    </div>
                    <div class="col-md-8 col-sm-12 p-4">
                      <div class="entry-title nott">
                        <h4 class="mb-0 tmu-text-primary"><span>Hostel Accommodation</span></h4>
                        <p>Comfortable Residency for Students</p>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div class="carousel-item">
                <article class="entry event col-12 col-md-6 mb-4">
                  <!-- Content for Waste Recycling System -->
                  <div class="grid-inner row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                    <div class="col-md-4 col-sm-12 mb-md-0">

                      <img src="{{asset('/assets/img/aboutus/campus_facilities/Faculty_Residences.webp')}}" alt="Inventore voluptates velit totam ipsa tenetur" class="rounded-2 h-100 object-cover">
                      <div class="bg-overlay">
                      </div>

                    </div>
                    <div class="col-md-8 col-sm-12 p-4">
                      <div class="entry-title nott">
                        <h4 class="mb-0 tmu-text-primary"><span>Faculty Residences</span></h4>
                        <p>Faculty Accommodation Within Campus</p>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div class="carousel-item">
                <article class="entry event col-12 col-md-6 mb-4">
                  <!-- Content for Waste Recycling System -->
                  <div class="grid-inner row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                    <div class="col-md-4 col-sm-12 mb-md-0">

                      <img src="{{asset('/assets/img/aboutus/campus_facilities/Indoor.webp')}}" alt="Inventore voluptates velit totam ipsa tenetur" class="rounded-2 h-100 object-cover">
                      <div class="bg-overlay">
                      </div>

                    </div>
                    <div class="col-md-8 col-sm-12 p-4">
                      <div class="entry-title nott">
                        <h4 class="mb-0 tmu-text-primary"><span>Indoor Stadiums</span></h4>
                        <p>Modern Sports <br> Facilities</p>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div class="carousel-item">
                <article class="entry event col-12 col-md-6 mb-4">
                  <!-- Content for Waste Recycling System -->
                  <div class="grid-inner row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                    <div class="col-md-4 col-sm-12 mb-md-0">

                      <img src="{{asset('/assets/img/aboutus/campus_facilities/Gym.webp')}}" alt="Inventore voluptates velit totam ipsa tenetur" class="rounded-2 h-100 object-cover">
                      <div class="bg-overlay">
                      </div>

                    </div>
                    <div class="col-md-8 col-sm-12 p-4">
                      <div class="entry-title nott">
                        <h4 class="mb-0 tmu-text-primary"><span>Gym Facilities (for Both Girls and Boys)</span></h4>
                        <p>Fitness Centres and Facilities</p>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div class="carousel-item">
                <article class="entry event col-12 col-md-6 mb-4">
                  <!-- Content for Waste Recycling System -->
                  <div class="grid-inner row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                    <div class="col-md-4 col-sm-12 mb-md-0">

                      <img src="{{asset('/assets/img/aboutus/campus_facilities/Outdoor.webp')}}" alt="Inventore voluptates velit totam ipsa tenetur" class="rounded-2 h-100 object-cover">
                      <div class="bg-overlay">
                      </div>

                    </div>
                    <div class="col-md-8 col-sm-12 p-4">
                      <div class="entry-title nott">
                        <h4 class="mb-0 tmu-text-primary"><span> Outdoor Stadiums</span></h4>
                        <p>Modern Sports <br> Facilities</p>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div class="carousel-item">
                <article class="entry event col-12 col-md-6 mb-4">
                  <!-- Content for Waste Recycling System -->
                  <div class="grid-inner row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                    <div class="col-md-4 col-sm-12 mb-md-0">

                      <img src="{{asset('/assets/img/aboutus/campus_facilities/CCTV.webp')}}" alt="Inventore voluptates velit totam ipsa tenetur" class="rounded-2 h-100 object-cover">
                      <div class="bg-overlay">
                      </div>

                    </div>
                    <div class="col-md-8 col-sm-12 p-4">
                      <div class="entry-title nott">
                        <h4 class="mb-0 tmu-text-primary"><span>24/7 Surveillance System</span></h4>
                        <p>Ensuring Safety with more than 3600 Night Vision Cameras</p>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div class="carousel-item">
                <article class="entry event col-12 col-md-6 mb-4">
                  <!-- Content for Waste Recycling System -->
                  <div class="grid-inner row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                    <div class="col-md-4 col-sm-12 mb-md-0">

                      <img src="{{asset('/assets/img/aboutus/campus_facilities/E_lobby.webp')}}" alt="Inventore voluptates velit totam ipsa tenetur" class="rounded-2 h-100 object-cover">
                      <div class="bg-overlay">
                      </div>

                    </div>
                    <div class="col-md-8 col-sm-12 p-4">
                      <div class="entry-title nott">
                        <h4 class="mb-0 tmu-text-primary mt-2"><span>E-Lobby (Food Court)</span></h4>
                        <p>Varied Dining Choices at E-Lobby</p>
                      </div>
                    </div>
                  </div>
                </article>
              </div>


            </div>
            <!-- Keep only the carousel indicators at the bottom -->
            <ol class="carousel-indicators list-style-none" style="bottom: 10px;">
              <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></li>
              <li data-bs-target="#carouselExample" data-bs-slide-to="1"></li>
              <li data-bs-target="#carouselExample" data-bs-slide-to="2"></li>
              <li data-bs-target="#carouselExample" data-bs-slide-to="3"></li>
              <li data-bs-target="#carouselExample" data-bs-slide-to="4"></li>
              <li data-bs-target="#carouselExample" data-bs-slide-to="5"></li>
              <li data-bs-target="#carouselExample" data-bs-slide-to="6"></li>
              <li data-bs-target="#carouselExample" data-bs-slide-to="7"></li>

            </ol>
          </div>
        </div>
        <!-- ends Here -->
      </div>
    </div>

  </div>
</div>
</div>

@endsection