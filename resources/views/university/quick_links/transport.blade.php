@extends('layouts.university.main')
@section('content')

<section id="content">
    <div class="content-wrap py-0">

        <section class="hero-section">
            <div id="campusCarousel" class="carousel slide hero-slider" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active hero-slide">
                        <img src="{{asset('/assets/img/footer_pages/banner/transport.jpg')}}"
                            class="hero-image" alt="Campus View">
                        <div class="content-overlay">
                            <div class="container">
                                <h1 class="section-title d-none d-lg-block" style="color: white;">Transport <span> Facility</span></h1>
                                <div class="stat-box d-none d-lg-inline-block">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h4>GPS-Enabled</h4>
                                            <p>Buses</p>
                                        </div>
                                        <div class="col-md-4">
                                            <h4>80+</h4>
                                            <p>Buses for Safe and Easy Commute</p>
                                        </div>
                                        <div class="col-md-4">
                                            <h4>Reasonable</h4>
                                            <p>Transport Fees</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more carousel items as needed -->
                </div>
            </div>
        </section>

        <div class="container">
            <div class="stat-box v2 d-block d-lg-none">
                <div class="row">
                    <div class="col-md-4">
                        <h4>GPS-Enabled</h4>
                        <p>Buses</p>
                    </div>
                    <div class="col-md-4">
                        <h4>Extensive</h4>
                        <p>Transport Network</p>
                    </div>
                    <div class="col-md-4">
                        <h4>Reasonable</h4>
                        <p>Transport Fees</p>
                    </div>
                </div>
            </div>
            <h2 Class="tmu-text-primary my-0 d-block d-lg-none text-center"><span>Transport</span><span> Facility</span></h2>
            <div class="row justify-content-center">
                <div class="col-lg-12 text-justify mb-2 mt-3">
                    <p class="text-justify mb-0 mt-1 m-lg-5 mb-lg-0">
                        TMU’s reliable and efficient transport system ensures seamless connectivity between the campus and surrounding areas. The university’s fleet of buses operates on well-planned routes, making it convenient for students, faculty, and staff to commute. Regular maintenance and professional drivers prioritise safety, ensuring a hassle-free travel experience. This service adds to the overall convenience of campus life, allowing everyone to focus on their academic and professional endeavours.
                </div>
            </div>
        </div>

        <section id="why-us" class="why-us section-bg mb-5">
            <div class="container" data-aos="fade-up">
                <h2 class="mt-5 mb-3 tmu-text-primary text-center"><span> Student</span><span>
                        Shuttle</span></h2>
                <div class="row">
                    <div class="col-lg-12 d-flex flex-column justify-content-center align-items-stretch mt-4">
                        <hr class="horizontal-line">
                        <button class="careers-accordion">Route 1 <span class="icon">+</span></button>
                        <div class="panel active">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <th>Sl. No.</th>
                                        <th>Route Name</th>
                                        <th>KM.</th>

                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Amroha</td>
                                            <td>35km</td>

                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Chandpur</td>
                                            <td>55km</td>

                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Gajraula</td>
                                            <td>30km</td>

                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Dhanaura</td>
                                            <td>40km</td>

                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Sambhal</td>
                                            <td>45km</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Babral</td>
                                            <td>40km</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <hr class="horizontal-line">
                        <button class="careers-accordion">Route 2 <span class="icon">+</span></button>
                        <div class="panel">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <th>Sl. No.</th>
                                        <th>Route Name</th>
                                        <th>KM.</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Peetal Nagri, Moradabad</td>
                                            <td>15km</td>

                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Shahbad and Kundarki </td>
                                            <td>25km</td>

                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Rampur</td>
                                            <td>30km</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Moonda Pandey</td>
                                            <td>35km</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Bilari</td>
                                            <td>30km</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Adampur</td>
                                            <td>30km</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Aichora</td>
                                            <td>50Km</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Milak</td>
                                            <td>40Km</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Shahzad Nagar</td>
                                            <td>50Km</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Dhampur</td>
                                            <td>60Km</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>Seohara</td>
                                            <td>55Km</td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>Sherkot</td>
                                            <td>65Km</td>
                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td>Afzalgarh</td>
                                            <td>80Km</td>
                                        </tr>
                                        <tr>
                                            <td>14</td>
                                            <td>Bareilly</td>
                                            <td>70Km</td>
                                        </tr>
                                        <tr>
                                            <td>15</td>
                                            <td>Chandausi</td>
                                            <td>70Km</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <hr class="horizontal-line">
                        <button class="careers-accordion">Route 3 <span class="icon">+</span></button>
                        <div class="panel">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <th>Sl. No.</th>
                                        <th>Route Name</th>
                                        <th>KM.</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Kashipur</td>
                                            <td>76km</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Bajpur</td>
                                            <td>85km</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Jaspur</td>
                                            <td>87km</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Thakurdwara</td>
                                            <td>76km</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <hr class="horizontal-line">

                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery Section -->
        <section class="gallery-section">
            <div class="container">
                <div class="gallery-header">
                    <h2 Class="tmu-text-primary mb-2 mt-5"><span>Transport</span><span> Gallery</span></h2>
                    <p class="lead">Explore our transport medium through these captivating images</p>
                </div>

                <div class="gallery-grid">
                    <!-- Academic Blocks -->
                    <div class="gallery-item" data-category="academic">
                        <img src="{{asset('/assets/img/footer_pages/transport/1.jpg')}}"
                            alt="Main Academic Block">
                        <div class="gallery-item-info">
                            <p class="gallery-item-category">Transport</p>
                        </div>
                    </div>

                    <div class="gallery-item" data-category="academic">
                        <img src="{{asset('/assets/img/footer_pages/transport/2.jpg')}}"
                            alt="Engineering Block">
                        <div class="gallery-item-info">
                            <p class="gallery-item-category">Transport</p>
                        </div>
                    </div>

                    <!-- Sports -->
                    <div class="gallery-item" data-category="sports">
                        <img src="{{asset('/assets/img/footer_pages/transport/3.jpg')}}"
                            alt="Sports Complex">
                        <div class="gallery-item-info">
                            <p class="gallery-item-category">Transport</p>
                        </div>
                    </div>

                    <div class="gallery-item" data-category="sports">
                        <img src="{{asset('/assets/img/footer_pages/transport/4.jpg')}}"
                            alt="Cricket Ground">
                        <div class="gallery-item-info">
                            <p class="gallery-item-category">Transport</p>
                        </div>
                    </div>

                    <!-- Library -->
                    <div class="gallery-item" data-category="library">
                        <img src="{{asset('/assets/img/footer_pages/transport/5.jpg')}}"
                            alt="Central Library">
                        <div class="gallery-item-info">
                            <p class="gallery-item-category">Transport</p>
                        </div>
                    </div>

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
