@extends('layouts.university.main')
@section('content')

<section id="content">
  <div class="content-wrap py-0">

    <section class="hero-section">
      <div id="campusCarousel" class="carousel slide hero-slider" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active hero-slide">
            <img src="{{asset('/assets/img/footer_pages/banner/bank.jpg')}}"
              class="hero-image" alt="Campus View">
            <div class="content-overlay">
              <div class="container">
                <h1 class="section-title d-none d-lg-block" style="color: white;">Bank <span> Facility</span></h1>
                <div class="stat-box d-none d-lg-inline-block">
                  <div class="row">
                    <div class="col-md-4">
                      <h4>On-Campus</h4>
                      <p>Bank</p>
                    </div>
                    <div class="col-md-4">
                      <h4>On-Site</h4>
                      <p>Multiple ATMs</p>
                    </div>
                    <div class="col-md-4">
                      <h4>Student-Friendly</h4>
                      <p>Services</p>
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
          <h4>On-Campus</h4>
          <p>Bank</p>
        </div>
        <div class="col-md-4">
          <h4>On-Site</h4>
          <p>Multiple ATMs</p>
        </div>
        <div class="col-md-4">
          <h4>Student-Friendly</h4>
          <p>Services</p>
        </div>
      </div>
    </div>
      <h2 Class="tmu-text-primary my-0 d-block d-lg-none text-center"><span>Bank </span><span>Facility</span></h2>
      <div class="row justify-content-center">
        <div class="col-lg-12 text-justify mb-2 mt-3">
          <p class="text-justify mb-2 mt-1 m-lg-5">
          TMU has a fully functional banking facility to simplify financial tasks for students, faculty, and visitors. The on-campus bank ensures all essential banking services, including deposits, withdrawals, and account management, are easily accessible. Additionally, round-the-clock ATMs provide instant cash withdrawal services, making it highly convenient for everyone. This seamless integration of financial services ensures individuals can focus on their academic or professional goals without the inconvenience of off-campus errands.
          </p>
        </div>
      </div>
    </div>

    <!-- amenities section start -->


    <!-- Gallery Section -->
    <section class="gallery-section">
      <div class="container">
        <div class="gallery-header">
          <h2 Class="tmu-text-primary mb-2 mt-5"><span>Bank Facility </span><span>Gallery</span></h2>
          <p class="lead">Explore our Banks and ATMs through these captivating images</p>
        </div>

        <div class="gallery-grid">
          <!-- Academic Blocks -->
          <div class="gallery-item" data-category="academic">
            <img src="{{asset('/assets/img/footer_pages/bank/1.jpg')}}"
              alt="Main Academic Block">
            <div class="gallery-item-info">
              <h3 class="gallery-item-title">New ATM Inauguration</h3>
              <p class="gallery-item-category">Bank Facility</p>
            </div>
          </div>

          <div class="gallery-item" data-category="academic">
            <img src="{{asset('/assets/img/footer_pages/bank/2.jpg')}}"
              alt="Engineering Block">
            <div class="gallery-item-info">
              <h3 class="gallery-item-title">Inauguration Event</h3>
              <p class="gallery-item-category">Bank Facility</p>
            </div>
          </div>

          <!-- Sports -->
          <div class="gallery-item" data-category="sports">
            <img src="{{asset('/assets/img/footer_pages/bank/3.jpg')}}"
              alt="Sports Complex">
            <div class="gallery-item-info">
              <h3 class="gallery-item-title">Bank Entrance</h3>
              <p class="gallery-item-category">Bank Facility</p>
            </div>
          </div>

          <div class="gallery-item" data-category="sports">
            <img src="{{asset('/assets/img/footer_pages/bank/4.jpg')}}"
              alt="Cricket Ground">
            <div class="gallery-item-info">
              <h3 class="gallery-item-title">PNB ATM</h3>
              <p class="gallery-item-category">Bank Facility</p>
            </div>
          </div>

          <!-- Library -->
          <div class="gallery-item" data-category="library">
            <img src="{{asset('/assets/img/footer_pages/bank/5.jpg')}}"
              alt="Central Library">
            <div class="gallery-item-info">
              <h3 class="gallery-item-title">Waiting Area</h3>
              <p class="gallery-item-category">Bank Facility</p>
            </div>
          </div>

          <div class="gallery-item" data-category="library">
            <img src="{{asset('/assets/img/footer_pages/bank/6.jpg')}}"
              alt="Digital Library">
            <div class="gallery-item-info">
              <h3 class="gallery-item-title">Bank Counters</h3>
              <p class="gallery-item-category">Bank Facility</p>
            </div>
          </div>

          <!-- Campus Life -->
          <div class="gallery-item" data-category="campus">
            <img src="{{asset('/assets/img/footer_pages/bank/7.jpg')}}"
              alt="Student Center">
            <div class="gallery-item-info">
              <h3 class="gallery-item-title">Bank Manager Office</h3>
              <p class="gallery-item-category">Bank Facility</p>
            </div>
          </div>

          <div class="gallery-item" data-category="campus">
            <img src="{{asset('/assets/img/footer_pages/bank/8.jpg')}}"
              alt="Cafeteria">
            <div class="gallery-item-info">
              <h3 class="gallery-item-title">Cash Counter</h3>
              <p class="gallery-item-category">Bank Facility</p>
            </div>
          </div>

          <div class="gallery-item" data-category="campus">
            <img src="{{asset('/assets/img/footer_pages/bank/9.jpg')}}"
              alt="Hostel Block">
            <div class="gallery-item-info">
              <h3 class="gallery-item-title">Enquiry Counter</h3>
              <p class="gallery-item-category">Bank Facility</p>
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
