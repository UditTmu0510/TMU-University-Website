@extends('layouts.university.departments.ciks_with_sidebar')
@section('content')


<div class="main-content">
    <div class="container">
        <!-- Gallery Section -->
        <section class="gallery-section">
            <div class="container">
                <div class="gallery-header">
                    <h2 Class="tmu-text-primary mb-2 mt-4"><span> </span><span>Glimpses</span></h2>
                    <p class="lead">Discover CIKS through these captivating and insightful images.</p>
                </div>

                <div class="gallery-grid">
                    <!-- Academic Blocks -->
                    <div class="gallery-item" data-category="academic">
                        <img src="{{ asset('assets/img/ciks/gallery/1.jpg') }}"
                            alt="Main Academic Block">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Kavi Sammelan</h3>
                            <p class="gallery-item-category">Indian Knowledge System</p>
                        </div>
                    </div>

                    <div class="gallery-item" data-category="academic">
                        <img src="{{ asset('assets/img/ciks/gallery/2.jpg') }}"
                            alt="Engineering Block">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Guest Lecture</h3>
                            <p class="gallery-item-category">Indian Knowledge System</p>
                        </div>
                    </div>

                    <!-- Sports -->
                    <div class="gallery-item" data-category="sports">
                        <img src="{{ asset('assets/img/ciks/gallery/3.jpg') }}"
                            alt="Sports Complex">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Kavi Sammelan</h3>
                            <p class="gallery-item-category">Indian Knowledge System</p>
                        </div>
                    </div>

                    <div class="gallery-item" data-category="sports">
                        <img src="{{ asset('assets/img/ciks/gallery/4.jpg') }}"
                            alt="Cricket Ground">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Pharmacy Freshers Party</h3>
                            <p class="gallery-item-category">Indian Knowledge System</p>
                        </div>
                    </div>

                    <!-- Library -->
                    <div class="gallery-item" data-category="library">
                        <img src="{{ asset('assets/img/ciks/gallery/5.jpg') }}"
                            alt="Central Library">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Leadership Talk Series</h3>
                            <p class="gallery-item-category">Indian Knowledge System</p>
                        </div>
                    </div>

                    <div class="gallery-item" data-category="library">
                        <img src="{{ asset('assets/img/ciks/gallery/6.jpg') }}"
                            alt="Digital Library">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Leadership Talk Series</h3>
                            <p class="gallery-item-category">Indian Knowledge System</p>
                        </div>
                    </div>

                    <!-- Campus Life -->
                    <div class="gallery-item" data-category="campus">
                        <img src="{{ asset('assets/img/ciks/gallery/7.jpg') }}"
                            alt="Student Center">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">Ignite Fest</h3>
                            <p class="gallery-item-category">Indian Knowledge System</p>
                        </div>
                    </div>

                    <div class="gallery-item" data-category="campus">
                        <img src="{{ asset('assets/img/ciks/gallery/8.jpg') }}"
                            alt="Cafeteria">
                        <div class="gallery-item-info">
                            <h3 class="gallery-item-title">University Indian Knowledge System</h3>
                            <p class="gallery-item-category">Indian Knowledge System</p>
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
</div>
</div>
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
</div>
@endsection