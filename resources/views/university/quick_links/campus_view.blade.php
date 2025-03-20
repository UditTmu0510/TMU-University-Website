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
                                <h1 class="section-title d-none d-lg-block" style="color: white;">CAMPUS <span>VIEW</span></h1>
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


        <!-- Gallery Section -->
        <section class="gallery-section">
            <div class="container">
                <div class="gallery-header">
                    <h2 Class="tmu-text-primary mb-2 mt-5"><span>Campus </span><span>Gallery</span></h2>
                    <p class="lead">Explore our beautiful campus through these captivating images</p>
                </div>

                <div class="gallery-filters">
                    <button class="filter-btn active" data-filter="all">All</button>
                    <button class="filter-btn" data-filter="cafe">Cafeteria</button>
                    <button class="filter-btn" data-filter="library">Library</button>
                    <button class="filter-btn" data-filter="infra">Infrastructure</button>
                    <button class="filter-btn" data-filter="sports">Sports</button>

                </div>

                <div class="gallery-grid">
                    <!-- Infra -->
                    <div class="gallery-item" data-category="infra">
                        <img src="{{asset('/assets/img/footer_pages/infra/campus-grid-2.webp')}}"
                            alt="Main Academic Block">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Pavilion</h3>
                            <p class="gallery-item-category">Infrastructure</p>
                        </div>
                    </div>

                    <div class="gallery-item" data-category="infra">
                        <img src="{{asset('/assets/img/footer_pages/infra/6.jpg')}}"
                            alt="Main Academic Block">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Hostels</h3>
                            <p class="gallery-item-category">Infrastructure</p>
                        </div>
                    </div>

                    <div class="gallery-item" data-category="infra">
                        <img src="{{asset('/assets/img/footer_pages/jinalaya/2.jpg')}}"
                            alt="Engineering Block">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Teerthanker Mahaveer Jinalaya</h3>
                            <p class="gallery-item-category">Infrastructure</p>
                        </div>
                    </div>

                    <div class="gallery-item" data-category="infra">
                        <img src="{{asset('/assets/img/footer_pages/yoga/10.jpg')}}"
                            alt="Sports Complex">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Indoor Stadium</h3>
                            <p class="gallery-item-category">Infrastructure</p>
                        </div>
                    </div>

                    <div class="gallery-item" data-category="infra">
                        <img src="{{asset('/assets/img/footer_pages/infra/8.jpg')}}"
                            alt="Engineering Block">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Central Library</h3>
                            <p class="gallery-item-category">Infrastructure</p>
                        </div>
                    </div>

                    <div class="gallery-item" data-category="infra">
                        <img src="{{asset('/assets/img/footer_pages/infra/1.jpg')}}"
                            alt="Engineering Block">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Hospital</h3>
                            <p class="gallery-item-category">Infrastructure</p>
                        </div>
                    </div>
                    <div class="gallery-item" data-category="infra">
                        <img src="{{asset('/assets/img/footer_pages/infra/9.jpg')}}"
                            alt="Engineering Block">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Faculty Block</h3>
                            <p class="gallery-item-category">Infrastructure</p>
                        </div>
                    </div>
                    <div class="gallery-item" data-category="infra">
                        <img src="{{asset('/assets/img/footer_pages/infra/19.jpg')}}"
                            alt="Engineering Block">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Auditorium</h3>
                            <p class="gallery-item-category">Infrastructure</p>
                        </div>
                    </div>

                    <!-- Sports -->
                    <div class="gallery-item" data-category="sports">
                        <img src="{{asset('/assets/img/footer_pages/yoga/10.jpg')}}"
                            alt="Sports Complex">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Sports Complex</h3>
                            <p class="gallery-item-category">Sports</p>
                        </div>
                    </div>

                    <div class="gallery-item" data-category="sports">
                        <img src="{{asset('/assets/img/footer_pages/sports/6.jpg')}}"
                            alt="Cricket Ground">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Kabbadi</h3>
                            <p class="gallery-item-category">Sports</p>
                        </div>
                    </div>

                    <div class="gallery-item" data-category="sports">
                        <img src="{{asset('/assets/img/footer_pages/sports/10.jpg')}}"
                            alt="Cricket Ground">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Race</h3>
                            <p class="gallery-item-category">Sports</p>
                        </div>
                    </div>

                    <div class="gallery-item" data-category="sports">
                        <img src="{{asset('/assets/img/footer_pages/sports/2.jpg')}}"
                            alt="Indoor Sports Complex">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Football</h3>
                            <p class="gallery-item-category">Sports</p>
                        </div>
                    </div>
                    <div class="gallery-item" data-category="sports">
                        <img src="{{asset('/assets/img/footer_pages/sports/8.jpg')}}"
                            alt="Cafeteria">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Volleyball</h3>
                            <p class="gallery-item-category">Indoor Sport</p>
                        </div>
                    </div>

                    <div class="gallery-item" data-category="sports">
                        <img src="{{asset('/assets/img/footer_pages/sports/9.jpg')}}"
                            alt="Hostel Block">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Cricket</h3>
                            <p class="gallery-item-category">Outdoor Sport</p>
                        </div>
                    </div>


                    <!-- Library -->
                    <div class="gallery-item" data-category="library">
                        <img src="{{asset('/assets/img/footer_pages/Library/1.jpg')}}"
                            alt="Central Library">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Central Library</h3>
                            <p class="gallery-item-category">Library</p>
                        </div>
                    </div>

                    <div class="gallery-item" data-category="library">
                        <img src="{{asset('/assets/img/footer_pages/Library/5.jpg')}}"
                            alt="Digital Library">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Digital Library</h3>
                            <p class="gallery-item-category">Library</p>
                        </div>
                    </div>

                    <div class="gallery-item" data-category="cafe">
                        <img src="{{asset('/assets/img/footer_pages/E-Lobby/1.jpg')}}"
                            alt="Central Library">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Bicano Restaurant</h3>
                            <p class="gallery-item-category">Cafeteria</p>
                        </div>
                    </div>

                    <div class="gallery-item" data-category="cafe">
                        <img src="{{asset('/assets/img/footer_pages/E-Lobby/2.jpg')}}"
                            alt="Digital Library">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Rainbow Cafe</h3>
                            <p class="gallery-item-category">Cafeteria</p>
                        </div>
                    </div>
                    <div class="gallery-item" data-category="cafe">
                        <img src="{{asset('/assets/img/footer_pages/E-Lobby/3.jpg')}}"
                            alt="Digital Library">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Chai Nagri</h3>
                            <p class="gallery-item-category">Cafeteria</p>
                        </div>
                    </div>
                    <div class="gallery-item" data-category="cafe">
                        <img src="{{asset('/assets/img/footer_pages/E-Lobby/4.jpg')}}"
                            alt="Digital Library">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Domino's</h3>
                            <p class="gallery-item-category">Cafeteria</p>
                        </div>
                    </div>
                    <div class="gallery-item" data-category="cafe">
                        <img src="{{asset('/assets/img/footer_pages/E-Lobby/5.jpg')}}"
                            alt="Digital Library">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Bicano Cafe</h3>
                            <p class="gallery-item-category">Cafeteria</p>
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