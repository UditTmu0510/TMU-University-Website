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
                                <div class="stat-box d-none d-lg-inline-block">
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
            </div>
            <h2 Class="tmu-text-primary my-0 d-block d-lg-none text-center"><span>CAMPUS </span><span> VIEW</span></h2>
            <div class="row justify-content-center">
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
            </div>
        </div>


        <!-- Contact Info -->
        <section>
            <div class="gallery-header">
                <h2 Class="tmu-text-primary mb-2 mt-5"><span>Contact </span><span>Information</span></h2>
            </div>


            <div class="container">
                <ul class="m-ol-list">
                    <li class="tmu-text-primary"><span>Univeristy Address: </span><span>N.H.-9, Delhi Road, Moradabad - 244001,
                        Uttar Pradesh</span></li>
                    <li class="tmu-text-primary"><span>Univeristy Contact Email: </span><span>university@tmu.ac.in</span></li>
                    <li class="tmu-text-primary"><span>Admissions Contact Number: </span><span>1800-270-1490</span></li>
                    <li class="tmu-text-primary"><span>Admissions Email: </span><span>admissions@tmu.ac.in</span></li>
                </ul>
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