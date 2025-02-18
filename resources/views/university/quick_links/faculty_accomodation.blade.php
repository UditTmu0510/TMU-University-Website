@extends('layouts.university.main')
@section('content')

<section id="content">
  <div class="content-wrap py-0">

    <section class="hero-section">
      <div id="campusCarousel" class="carousel slide hero-slider" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active hero-slide">
            <img src="{{asset('/assets/img/footer_pages/banner/accomodation.jpg')}}"
              class="hero-image" alt="Campus View">
            <div class="content-overlay">
              <div class="container">
                <h1 class="section-title d-none d-lg-block" style="color: white;">Faculty <span> Accomodation</span></h1>
                <div class="stat-box d-none d-lg-inline-block">
                  <div class="row">
                    <div class="col-md-4">
                      <h4>24 / 7</h4>
                      <p>Medical Facilities</p>
                    </div>
                    <div class="col-md-4">
                      <h4>Modern</h4>
                      <p>Gymnasium</p>
                    </div>
                    <div class="col-md-4">
                      <h4>Top Notch</h4>
                      <p>Security</p>
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
            <h4>24 / 7</h4>
            <p>Medical Facilities</p>
          </div>
          <div class="col-md-4">
            <h4>Modern</h4>
            <p>Gymnasium</p>
          </div>
          <div class="col-md-4">
            <h4>Top Notch</h4>
            <p>Security</p>
          </div>
        </div>
      </div>
      <h2 Class="tmu-text-primary my-0 d-block d-lg-none text-center"><span>Faculty </span><span>Accomodation</span></h2>
      <div class="row justify-content-center">
        <div class="col-lg-12 text-justify mb-2 mt-3">
          <p class="text-justify mb-2 mt-1 m-lg-3 mt-lg-5">
            We deeply value the well-being and comfort of our faculty members. TMU offers thoughtfully designed accommodations that provide both professional productivity and personal relaxation. These spacious apartments are fully furnished with modern amenities, including high-speed internet, well-equipped kitchens, and nice interiors. Round-the-clock security ensures a safe living environment, while dedicated maintenance staff ensures all facilities are always in top condition. The serene surroundings and proximity to the campus add to the convenience, making these accommodations the perfect home for our faculty.
          </p>
        </div>
      </div>
    </div>

    <!-- amenities section start -->


    <section class="amenities-section">
      <div class="container">
        <h2 Class="tmu-text-primary mb-4 mt-5"><span>Accomodation </span><span>Amenities</span></h2>
        <div class="amenities-carousel">
          <!-- Repeat this block for each amenity -->
          <div class="amenity-item">
            <div class="amenities-icon">
              <i class="bi bi-wifi"></i>
            </div>
            <p>Free WiFi</p>
          </div>
          <div class="amenity-item">
            <div class="amenities-icon">
              <i class="bi bi-power"></i>
            </div>
            <p>24 x 7 Power Backup</p>
          </div>
          <div class="amenity-item">
            <div class="amenities-icon">
              <i class="bi bi-house"></i>
            </div>
            <p>Well-furnished rooms</p>
          </div>
          <div class="amenity-item">
            <div class="amenities-icon">
              <i class="fas fa-running"></i>
            </div>
            <p>Vast campus offering peaceful walks</p>
          </div>
          <div class="amenity-item">
            <div class="amenities-icon">
              <i class="bi bi-basket"></i> <!-- Changed icon -->
            </div>
            <p>Food Hub</p>
          </div>
          <div class="amenity-item">
            <div class="amenities-icon">
              <i class="bi bi-bicycle"></i>
            </div>
            <p>GYM</p>
          </div>
          <div class="amenity-item">
            <div class="amenities-icon">
              <i class="bi bi-patch-check"></i>
            </div>
            <p>Super Speciality Hospital</p>
          </div>
          <div class="amenity-item">
            <div class="amenities-icon">
              <i class="bi bi-cup"></i>
            </div>
            <p>Mess</p>
          </div>
          <div class="amenity-item">
            <div class="amenities-icon">
              <i class="bi bi-door-open"></i>
            </div>
            <p>Flexible Check-In</p>
          </div>
          <div class="amenity-item">
            <div class="amenities-icon">
              <i class="bi bi-shield-lock"></i> <!-- Changed icon -->
            </div>
            <p>24/7 High Security and Surveillance</p>
          </div>
          
          <!-- Add more amenities here -->
        </div>
      </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery-section">
      <div class="container">
        <div class="gallery-header">
          <h2 Class="tmu-text-primary mb-2 mt-5"><span>Faculty Accomodation </span><span>Gallery</span></h2>
          <p class="lead">Explore our beautiful campus through these captivating images</p>
        </div>

        <div class="gallery-grid">
          <!-- Academic Blocks -->
          <div class="gallery-item" data-category="academic">
            <img src="{{asset('/assets/img/footer_pages/faculty_accomodation/1.jpg')}}"
              alt="Main Academic Block">
            <div class="gallery-item-info">
              <h3 class="gallery-item-title">Vaishali Apartment</h3>
              <p class="gallery-item-category">Faculty Accomodation</p>
            </div>
          </div>

          <div class="gallery-item" data-category="academic">
            <img src="{{asset('/assets/img/footer_pages/faculty_accomodation/2.jpg')}}"
              alt="Engineering Block">
            <div class="gallery-item-info">
              <h3 class="gallery-item-title">Shikhar Apartment </h3>
              <p class="gallery-item-category">Faculty Accomodation</p>
            </div>
          </div>

          <!-- Sports -->
          <div class="gallery-item" data-category="sports">
            <img src="{{asset('/assets/img/footer_pages/faculty_accomodation/3.jpg')}}"
              alt="Sports Complex">
            <div class="gallery-item-info">
              <h3 class="gallery-item-title">Kailash Apartment Parking Area</h3>
              <p class="gallery-item-category">Faculty Accomodation</p>
            </div>
          </div>

          <div class="gallery-item" data-category="sports">
            <img src="{{asset('/assets/img/footer_pages/faculty_accomodation/4.jpg')}}"
              alt="Cricket Ground">
            <div class="gallery-item-info">
              <h3 class="gallery-item-title">Faculty Housing Lawn</h3>
              <p class="gallery-item-category">Faculty Accomodation</p>
            </div>
          </div>

          <!-- Library -->
          <div class="gallery-item" data-category="library">
            <img src="{{asset('/assets/img/footer_pages/faculty_accomodation/5.jpg')}}"
              alt="Central Library">
            <div class="gallery-item-info">
              <h3 class="gallery-item-title">Girnar and Kailash Apartment</h3>
              <p class="gallery-item-category">Faculty Accomodation</p>
            </div>
          </div>

          <div class="gallery-item" data-category="library">
            <img src="{{asset('/assets/img/footer_pages/faculty_accomodation/6.jpg')}}"
              alt="Digital Library">
            <div class="gallery-item-info">
              <h3 class="gallery-item-title">Faculty Housing Lawn</h3>
              <p class="gallery-item-category">Faculty Accomodation</p>
            </div>
          </div>

          <!-- Campus Life -->
          <div class="gallery-item" data-category="campus">
            <img src="{{asset('/assets/img/footer_pages/faculty_accomodation/7.jpg')}}"
              alt="Student Center">
            <div class="gallery-item-info">
              <h3 class="gallery-item-title">Aerial View of Faculty Housing</h3>
              <p class="gallery-item-category">Faculty Accomodation</p>
            </div>
          </div>

          <div class="gallery-item" data-category="campus">
            <img src="{{asset('/assets/img/footer_pages/faculty_accomodation/8.jpg')}}"
              alt="Cafeteria">
            <div class="gallery-item-info">
              <h3 class="gallery-item-title">Vaishali Apartment with Sports Complex</h3>
              <p class="gallery-item-category">Faculty Accomodation</p>
            </div>
          </div>

          <div class="gallery-item" data-category="campus">
            <img src="{{asset('/assets/img/footer_pages/faculty_accomodation/9.jpg')}}"
              alt="Hostel Block">
            <div class="gallery-item-info">
              <h3 class="gallery-item-title">Arihant Apartment</h3>
              <p class="gallery-item-category">Faculty Accomodation</p>
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