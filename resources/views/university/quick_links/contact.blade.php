@extends('layouts.university.main')
@section('content')

<section id="content">
    <div class="content-wrap py-0">

        <section class="hero-section">
            <div id="campusCarousel" class="carousel slide hero-slider" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active hero-slide">
                        <img src="{{asset('/assets/img/footer_pages/banner/campus.webp')}}"
                            class="hero-image" alt="Campus View">
                        <div class="content-overlay">
                            <div class="container">
                                <h1 class="section-title d-none d-lg-block" style="color: white;">Contact <span>US</span></h1>
                                {{-- <div class="stat-box d-none d-lg-inline-block">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h4>135+ Acre</h4>
                                            <p>Campus Area</p>
                                        </div>
                                        <div class="col-md-4">
                                            <h4>Wi-Fi-Enabled</h4>
                                            <p>Buildings</p>
                                        </div>
                                        <div class="col-md-4">
                                            <h4>Eco-Conscious</h4>
                                            <p>Recognised Institute</p>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <!-- Add more carousel items as needed -->
                </div>
            </div>
        </section>

        <div class="container">
            {{-- <div class="stat-box v2 d-block d-lg-none">
                <div class="row">
                    <div class="col-md-4">
                        <h4>135+ Acre</h4>
                        <p>Campus Area</p>
                    </div>
                    <div class="col-md-4">
                        <h4>Wi-Fi-Enabled</h4>
                        <p>Buildings</p>
                    </div>
                    <div class="col-md-4">
                        <h4>Eco-Conscious</h4>
                        <p>Recognised Institute</p>
                    </div>
                </div>
            </div> --}}
            <h2 Class="tmu-text-primary my-0 d-block d-lg-none text-center"><span>Contact </span><span> Us</span></h2>
            {{-- <div class="row justify-content-center">
                <div class="col-lg-12 text-justify mb-2 mt-3">
                    <p class="text-justify mb-2 mt-1 m-lg-5">
                        Teerthanker Mahaveer University is a dream destination, where modern infrastructure,
                        world-class facilities, and a supportive community create the perfect backdrop for
                        your academic journey. Every corner of TMU is thoughtfully designed to inspire and
                        support you, fostering a dynamic environment that complements your academic and
                        personal growth. We offer a vibrant campus experience that blends learning with fun.
                        From the moment you step onto our campus, you'll feel a sense of purpose, the joy
                        of discovery, and the warmth of belonging.</p>
                </div>
            </div> --}}
        </div>


        <!-- Contact Info -->
        <section>
            {{-- <div class="gallery-header">
                <h2 Class="tmu-text-primary mb-2 mt-5"><span>Contact </span><span>Information</span></h2>
            </div> --}}

            <style>
                .contact-info .tmu-text-primary>span:nth-child(2){
                    color: #000;
                } 
            </style>


            <div class="container mx-5">
                <ul class="m-ol-list contact-info">
                    <li class="tmu-text-primary"><span class="fs-18 fw-bold">Univeristy Address: </span><span>N.H.-9, Delhi Road, Moradabad - 244001,
                        Uttar Pradesh</span></li>
                    <li class="tmu-text-primary"><span class="fs-18 fw-bold">Univeristy Contact Email: </span><span>university@tmu.ac.in</span></li>
                    <li class="tmu-text-primary"><span class="fs-18 fw-bold">Admissions Contact Number: </span><span>1800-270-1490</span></li>
                    <li class="tmu-text-primary"><span class="fs-18 fw-bold">Admissions Email: </span><span>admissions@tmu.ac.in</span></li>
                </ul>

                <div class="gallery-header">
                    <h2 Class="tmu-text-primary mb-2 mt-5"><span>Contact </span><span>Information</span></h2>
                </div> 

                {{-- Contact Table  --}}
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                            <th rowspan="2">Faculties, Colleges and Departments</th>
                            <th colspan="3">Contact Info</th>
                        </tr>
                        <tr>
                          <th>Email</th>
                          <th>Phone No.</th>
                          <th>Online Form</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Teerthanker Mahaveer Medical College and Research Centre</td>
                          <td>principal.medical@tmu.ac.in</td>
                          <td>(+91) 591-2476815</td>
                          <td><a href="https://www.tmu.ac.in/medical-college-and-research-centre/contact-us">Link</a></td>
                        </tr>
                        <tr>
                          <td>Teerthanker Mahaveer Dental College & Research Centre</td>
                          <td>principal.dental@tmu.ac.in</td>
                          <td>(+91) 591-2476823</td>
                          <td><a href="https://www.tmu.ac.in/dental-college-and-research-centre/contact-us">Link</a></td>
                        </tr>
                        <tr>
                          <td>Teerthanker Mahaveer College of Nursing</td>
                          <td>principal.nursing@tmu.ac.in</td>
                          <td>(+91) 591-2476844</td>
                          <td><a href="https://www.tmu.ac.in/college-of-nursing/contact-us">Link</a></td>
                        </tr>
                        <tr>
                          <td>Teerthanker Mahaveer College of Pharmacy</td>
                          <td>principal.pharmacy@tmu.ac.in</td>
                          <td>(+91) 591-2476825</td>
                          <td><a href="https://www.tmu.ac.in/college-of-pharmacy/contact-us">Link</a></td>
                        </tr>
                        <tr>
                          <td>Teerthanker Mahaveer University College of Paramedical Sciences</td>
                          <td>principal.paramedical@tmu.ac.in</td>
                          <td>(+91) 591-2476847</td>
                          <td><a href="https://www.tmu.ac.in/college-of-paramedical-sciences/contact-us">Link</a></td>
                        </tr>
                        <tr>
                          <td>Department of Physiotherapy</td>
                          <td>principal.physiotherapy@tmu.ac.in</td>
                          <td>(+91) 591-2476812</td>
                          <td><a href="https://www.tmu.ac.in/department-of-physiotherapy/contact-us">Link</a></td>
                        </tr>
                        <tr>
                          <td>TMIMT College of Management</td>
                          <td>principal.management@tmu.ac.in</td>
                          <td>(+91) 591-2476847</td>
                          <td><a href="https://www.tmu.ac.in/tmimt-college-of-management/contact-us">Link</a></td>
                        </tr>
                        <tr>
                          <td>Teerthanker Mahaveer College of Law & Legal Studies</td>
                          <td>principal.law@tmu.ac.in</td>
                          <td>(+91) 9568118000, (+91) 9568119000</td>
                          <td><a href="https://www.tmu.ac.in/college-of-law-and-legal-studies/contact-us">Link</a></td>
                        </tr>
                        <tr>
                          <td>College of Computing Sciences & IT</td>
                          <td>dean.engineering@tmu.ac.in</td>
                          <td>(+91) 591-2476832, 9568516000, 9568517000, 7351418000</td>
                          <td><a href="https://www.tmu.ac.in/college-of-computing-sciences-and-it/contact-us">Link</a></td>
                        </tr>
                        <tr>
                          <td>Teerthanker Mahaveer University College of Engineering</td>
                          <td>dean.engineering@tmu.ac.in</td>
                          <td>(+91) 591-2476832, 9568516000, 9568517000, 7351418000</td>
                          <td><a href="https://www.tmu.ac.in/faculty-of-engineering/contact-us">Link</a></td>
                        </tr>
                        <tr>
                          <td>College of Fine Arts</td>
                          <td>principal.finearts@tmu.ac.in</td>
                          <td>(+91) 591-2476836</td>
                          <td><a href="https://www.tmu.ac.in/college-of-fine-arts/contact-us">Link</a></td>
                        </tr>
                        <tr>
                          <td>Faculty of Education</td>
                          <td>principal.education@tmu.ac.in</td>
                          <td>(+91) 9568717000, (+91) 9568418000</td>
                          <td><a href="https://www.tmu.ac.in/faculty-of-education/contact-us">Link</a></td>
                        </tr>
                        <tr>
                          <td>TMIMT College of Physical Education</td>
                          <td>principal.physicaleducation@tmu.ac.in</td>
                          <td>(+91) 9837469801</td>
                          <td><a href="https://www.tmu.ac.in/tmimt-college-of-physical-education/contact-us">Link</a></td>
                        </tr>
                        <tr>
                          <td>Teerthanker Mahaveer College of Agriculture Sciences</td>
                          <td>principal.agriculture@tmu.ac.in</td>
                          <td>(+91) 591-2476831</td>
                          <td><a href="https://www.tmu.ac.in/college-of-agriculture-sciences/contact-us">Link</a></td>
                        </tr>
                        <tr>
                          <td>IQAC</td>
                          <td>director.iqac@tmu.ac.in</td>
                          <td>(+91) - 591-2476813, (+91) - 9997501313</td>
                          <td><a href="https://www.tmu.ac.in/tmu/iqac-cell/contact-us">Link</a></td>
                        </tr>
                        <tr>
                          <td>Alumni</td>
                          <td>alumni@tmu.ac.in</td>
                          <td>(+91) 591-2476806</td>
                          <td><a href="https://www.tmu.ac.in/alumni/contact-us">Link</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
            </div>
        </section>

        <div class="lightbox">
            <span class="lightbox-close">&times;</span>
            <button class="lightbox-prev">&lt;</button>
            <img src="" alt="Enlarged Image">
            <div class="lightbox-caption"></div>
            <button class="lightbox-next">&gt;</button>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const galleryItems = document.querySelectorAll('.gallery-item');
        const lightbox = document.querySelector('.lightbox');
        const lightboxImg = lightbox.querySelector('img');
        const lightboxClose = document.querySelector('.lightbox-close');
        const lightboxNext = document.querySelector('.lightbox-next');
        const lightboxPrev = document.querySelector('.lightbox-prev');
        const lightboxCaption = document.querySelector('.lightbox-caption');

        let currentIndex = 0;

        // Filtering functionality
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                filterButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');

                const filter = button.getAttribute('data-filter');

                galleryItems.forEach(item => {
                    if (filter === 'all' || item.getAttribute('data-category') === filter) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });

        // Lightbox functionality
        galleryItems.forEach((item, index) => {
            item.addEventListener('click', () => {
                const imgSrc = item.querySelector('img').src;
                const imgTitle = item.querySelector('.gallery-item-title').textContent; // Get the image title
                currentIndex = index;

                lightboxImg.src = imgSrc;
                lightboxCaption.textContent = imgTitle; // Set the title in the caption
                lightbox.classList.add('active');
            });
        });

        lightboxClose.addEventListener('click', () => {
            lightbox.classList.remove('active');
        });

        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) {
                lightbox.classList.remove('active');
            }
        });

        // Lightbox navigation
        const updateLightboxImage = () => {
            const visibleItems = Array.from(galleryItems).filter(item => item.style.display !== 'none');
            if (visibleItems.length > 0) {
                currentIndex = (currentIndex + visibleItems.length) % visibleItems.length; // Wrap around
                const imgSrc = visibleItems[currentIndex].querySelector('img').src;
                const imgTitle = visibleItems[currentIndex].querySelector('.gallery-item-title').textContent;

                lightboxImg.src = imgSrc;
                lightboxCaption.textContent = imgTitle; // Update caption when navigating
            }
        };

        lightboxNext.addEventListener('click', () => {
            currentIndex++;
            updateLightboxImage();
        });

        lightboxPrev.addEventListener('click', () => {
            currentIndex--;
            updateLightboxImage();
        });
    });
</script>
@endsection