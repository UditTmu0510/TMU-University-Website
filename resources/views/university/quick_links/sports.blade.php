@extends('layouts.university.main')
@section('content')

<section id="content">
    <div class="content-wrap py-0">

        <section class="hero-section">
            <div id="campusCarousel" class="carousel slide hero-slider" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active hero-slide">
                        <img src="{{asset('/assets/img/footer_pages/banner/sports.jpg')}}"
                            class="hero-image" alt="Campus View">
                        <div class="content-overlay">
                            <div class="container">
                                <h1 class="section-title" style="color: white;">Sports <span></span></h1>
                                <p class="lead mb-4 col-md-6">Unleash your potential with our world-class sports facilities, promoting physical fitness, teamwork, and excellence in a range of indoor and outdoor games.</p>
                                <div class="stat-box">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h4>50+ Acres</h4>
                                            <p>Campus Area</p>
                                        </div>
                                        <div class="col-md-4">
                                            <h4>20+</h4>
                                            <p>Modern Buildings</p>
                                        </div>
                                        <div class="col-md-4">
                                            <h4>100%</h4>
                                            <p>Green Campus</p>
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
            <h2 Class="tmu-text-primary mb-2 mt-5"><span>Sports </span><span></span></h2>
            <div class="row justify-content-center">
                <div class="col-lg-12 text-justify mb-2 mt-3">
                    <p class="text-justify mb-2 mt-1">
                    TMU champions the importance of sports in fostering a healthy and active lifestyle. 
                    Our world-class facilities cater to a wide range of sports, including cricket, football, 
                    basketball, badminton, and table tennis. The campus features both outdoor fields and 
                    indoor courts, designed to encourage students to explore their athletic potential. 
                    From professional coaching to inter-college tournaments, TMU creates opportunities 
                    for students to build teamwork, discipline, and leadership skills. The emphasis on 
                    sports goes hand-in-hand with our commitment to nurturing well-rounded individuals.

                    </p>
                </div>
            </div>
        </div>

        <!-- amenities section start -->

        <!-- Gallery Section -->
        <section class="gallery-section">
            <div class="container">
                <div class="gallery-header">
                <h2 Class="tmu-text-primary mb-2 mt-5"><span>Sports </span><span>Gallery</span></h2>
                    <p class="lead">Explore our beautiful campus through these captivating images</p>
                </div>

                <div class="gallery-filters">
                    <button class="filter-btn active" data-filter="all">All</button>
                    <button class="filter-btn" data-filter="indoor Sport">Indoor Sport</button>
                    <button class="filter-btn" data-filter="outdoor Sport">Outdoor Sport</button>
                </div>

                <div class="gallery-grid">
                    <!-- Academic Blocks -->
                    <div class="gallery-item" data-category="indoor Sport">
                        <img src="{{asset('/assets/img/footer_pages/sports/1.jpg')}}"
                            alt="Main Academic Block">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Volleyball</h3>
                            <p class="gallery-item-category">Indoor Sport</p>
                        </div>
                    </div>

                    <div class="gallery-item" data-category="outdoor Sport">
                        <img src="{{asset('/assets/img/footer_pages/sports/2.jpg')}}"
                            alt="Engineering Block">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Foot Ball</h3>
                            <p class="gallery-item-category">Outdoor Sport</p>
                        </div>
                    </div>

                    <!-- Sports -->
                    <div class="gallery-item" data-category="indoor Sport">
                        <img src="{{asset('/assets/img/footer_pages/sports/3.jpg')}}"
                            alt="Sports Complex">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Basket Ball</h3>
                            <p class="gallery-item-category">Indoor Sport</p>
                        </div>
                    </div>

                    <div class="gallery-item" data-category="indoor Sport">
                        <img src="{{asset('/assets/img/footer_pages/sports/4.jpg')}}"
                            alt="Cricket Ground">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">badminton</h3>
                            <p class="gallery-item-category">Indoor Sport</p>
                        </div>
                    </div>

                    <!-- Library -->
                    <div class="gallery-item" data-category="outdoor Sport">
                        <img src="{{asset('/assets/img/footer_pages/sports/5.jpg')}}"
                            alt="Central Library">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Foot Ball</h3>
                            <p class="gallery-item-category">Outdoor Sport</p>
                        </div>
                    </div>

                    <div class="gallery-item" data-category="indoor Sport">
                        <img src="{{asset('/assets/img/footer_pages/sports/6.jpg')}}"
                            alt="Digital Library">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Kabaddi</h3>
                            <p class="gallery-item-category">Indoor Sport</p>
                        </div>
                    </div>

                    <!-- Campus Life -->
                    <div class="gallery-item" data-category="indoor Sport">
                        <img src="{{asset('/assets/img/footer_pages/sports/7.jpg')}}"
                            alt="Student Center">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Kabaddi</h3>
                            <p class="gallery-item-category">Indoor Sport</p>
                        </div>
                    </div>

                    <div class="gallery-item" data-category="indoor Sport">
                        <img src="{{asset('/assets/img/footer_pages/sports/8.jpg')}}"
                            alt="Cafeteria">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Volleyball</h3>
                            <p class="gallery-item-category">Indoor Sport</p>
                        </div>
                    </div>

                    <div class="gallery-item" data-category="outdoor Sport">
                        <img src="{{asset('/assets/img/footer_pages/sports/9.jpg')}}"
                            alt="Hostel Block">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Cricket</h3>
                            <p class="gallery-item-category">Outdoor Sport</p>
                        </div>
                    </div>

                    <div class="gallery-item" data-category="outdoor Sport">
                        <img src="{{asset('/assets/img/footer_pages/sports/10.jpg')}}"
                            alt="Research Center">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Racing</h3>
                            <p class="gallery-item-category">Outdoor Sport</p>
                        </div>
                    </div>

                    <div class="gallery-item" data-category="outdoor Sport">
                        <img src="{{asset('/assets/img/footer_pages/sports/11.jpg')}}"
                            alt="Indoor Sports Complex">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Foot Ball</h3>
                            <p class="gallery-item-category">Outdoor Sport</p>
                        </div>
                    </div>

                    <div class="gallery-item" data-category="outdoor Sport">
                        <img src="{{asset('/assets/img/footer_pages/sports/12.jpg')}}"
                            alt="Campus Garden">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Foot Ball</h3>
                            <p class="gallery-item-category">Outdoor Sport</p>
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
document.addEventListener('DOMContentLoaded', function () {
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