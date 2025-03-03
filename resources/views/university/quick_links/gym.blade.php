@extends('layouts.university.main')
@section('content')

<section id="content">
    <div class="content-wrap py-0">
        <section class="hero-section">
            <div id="campusCarousel" class="carousel slide hero-slider" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active hero-slide">
                        <img src="{{asset('/assets/img/footer_pages/banner/gym.jpg')}}"
                            class="hero-image" alt="Campus View">
                        <div class="content-overlay">
                            <div class="container">
                                <h1 class="section-title d-none d-lg-block" style="color: white;">Gymnasium & <span> Fitness Centre</span></h1>
                                <div class="stat-box d-none d-lg-inline-block">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h4>Fully-Equipped Modern </h4>
                                            <p>Gym</p>
                                        </div>
                                        <div class="col-md-4">
                                            <h4>Professional Trainers</h4>
                                            <p>& Fitness Experts</p>
                                        </div>
                                        <div class="col-md-4">
                                            <h4>Separate Gym Facilities </h4>
                                            <p>for Boys & Girls</p>
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
                        <h4>Fully-Equipped Modern </h4>
                        <p>Gym</p>
                    </div>
                    <div class="col-md-4">
                        <h4>Professional Trainers</h4>
                        <p>& Fitness Experts</p>
                    </div>
                    <div class="col-md-4">
                        <h4>Separate Gym Facilities </h4>
                        <p>for Boys & Girls</p>
                    </div>
                </div>
            </div>
            <h2 Class="tmu-text-primary my-0 d-block d-lg-none text-center"><span>Gymnasium & </span> <span> Fitness Centre</span></h2>
            <div class="row justify-content-center">
                <div class="col-lg-12 text-justify mb-2 mt-3">
                    <p class="text-justify mb-2 mt-1 m-lg-5">
                    At TMU, we prioritise fitness as a key to a healthy mind and body. Our state-of-the-art, air-conditioned gymnasium is equipped with modern fitness equipment, providing students and staff with a dedicated space to stay active. 
                    Designed for comfort and efficiency, the gym fosters a motivating environment for diverse workout routines, including strength training, cardio, and flexibility exercises. 
                    By promoting overall well-being, our gym encourages a culture of health and vitality across the campus.</p>
                </div>
            </div>
        </div>

        <!-- Gallery Section -->
        <section class="gallery-section">
            <div class="container">
                <div class="gallery-header">
                    <h2 Class="tmu-text-primary mb-2 mt-5"><span>Gymnasium & Fitness Centre</span><span> Gallery</span></h2>
                    <p class="lead">Explore our Gymnasium & Fitness Centre glimpse through these captivating images.</p>
                </div>

                <div class="gallery-grid">
                    <!-- Academic Blocks -->
                    <div class="gallery-item" data-category="Hospital">
                        <img src="{{asset('/assets/img/footer_pages/gym/1.jpg')}}"
                            alt="Gymnasium">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title"></h3>
                            <p class="gallery-item-category">GYM & Fitness Centre</p>
                        </div>
                    </div>

                    <div class="gallery-item" data-category="Hospital">
                        <img src="{{asset('/assets/img/footer_pages/gym/2.jpg')}}"
                            alt="Gymnasium">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title"></h3>
                            <p class="gallery-item-category">GYM & Fitness Centre</p>
                        </div>
                    </div>

                    <!-- Sports -->
                    <div class="gallery-item" data-category="Hospital">
                        <img src="{{asset('/assets/img/footer_pages/gym/3.jpg')}}"
                            alt="Gymnasium">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title"></h3>
                            <p class="gallery-item-category">GYM & Fitness Centre</p>
                        </div>
                    </div>

                    <div class="gallery-item" data-category="Hospital">
                        <img src="{{asset('/assets/img/footer_pages/gym/4.jpg')}}"
                            alt="Gymnasium">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title"></h3>
                            <p class="gallery-item-category">GYM & Fitness Centre</p>
                        </div>
                    </div>

                    <!-- Library -->
                    <div class="gallery-item" data-category="Hospital">
                        <img src="{{asset('/assets/img/footer_pages/gym/5.jpg')}}"
                            alt="Gymnasium">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title"></h3>
                            <p class="gallery-item-category">GYM & Fitness Centre</p>
                        </div>
                    </div>

                    <div class="gallery-item" data-category="Hospital">
                        <img src="{{asset('/assets/img/footer_pages/gym/6.jpg')}}"
                            alt="Gymnasium">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title"></h3>
                            <p class="gallery-item-category">GYM & Fitness Centre</p>
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


        <div class="container">
        <h2 Class="tmu-text-primary mb-2 mt-5 text-center"><span>GEO Tagged</span><span> Infrastructure</span></h2>
            <div class="row mb-3 mt-4">
                <div class="col-md-6 col-lg-3">
                    <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                        <div class="team-image">
                            <img src="{{asset('/assets/img/footer_pages/gym/geotagged/g-1.jpg')}}" alt="">
                        </div>
                        <div class="team-desc p-2">
                            <div class="team-title pt-0">
                                <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/footer_pages/gym/geotagged/gy1.jpg')}}"> Download Geo Tag Image</div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                        <div class="team-image">
                            <img src="{{asset('/assets/img/footer_pages/gym/geotagged/g-2.jpg')}}" alt="">
                        </div>
                        <div class="team-desc p-2">
                            <div class="team-title pt-0">
                                <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/footer_pages/gym/geotagged/gy2.jpg')}}"> Download Geo Tag Image</div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                        <div class="team-image">
                            <img src="{{asset('/assets/img/footer_pages/gym/geotagged/g-3.jpg')}}" alt="">
                        </div>
                        <div class="team-desc p-2">
                            <div class="team-title pt-0">
                                <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/footer_pages/gym/geotagged/gy3.jpg')}}"> Download Geo Tag Image</div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                        <div class="team-image">
                            <img src="{{asset('/assets/img/footer_pages/gym/geotagged/g-4.jpg')}}" alt="">
                        </div>
                        <div class="team-desc p-2">
                            <div class="team-title pt-0">
                                <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/footer_pages/gym/geotagged/gy4.jpg')}}"> Download Geo Tag Image</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // HOSPITAL COUNTER JS START
    document.addEventListener('DOMContentLoaded', () => {
        const counters = document.querySelectorAll('.hospital-counter');
        counters.forEach(counter => {
            const updateCounter = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const increment = target / 200;

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCounter, 10);
                } else {
                    counter.innerText = target;
                }
            };
            updateCounter();
        });
    });

    // HOSPITAL COUNTER JS END
</script>


@endsection