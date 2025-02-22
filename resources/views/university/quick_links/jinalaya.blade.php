@extends('layouts.university.main')
@section('content')

<section id="content">
  <div class="content-wrap py-0">

    <section class="hero-section">
      <div id="campusCarousel" class="carousel slide hero-slider" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active hero-slide">
            <img src="{{asset('/assets/img/footer_pages/banner/jinalaya.jpg')}}"
              class="hero-image" alt="Campus View">
            <div class="content-overlay">
              <div class="container">
                <h1 class="section-title d-none d-lg-block" style="color: white;">Mahaveer Ji <span> Jinalaya</span></h1>
                <div class="stat-box d-none d-lg-inline-block"">
                  <div class="row">
                    <div class="col-md-4">
                      <h4>Architectural</h4>
                      <p>Grandeur</p>
                    </div>
                    <div class="col-md-4">
                      <h4>Centre for</h4>
                      <p>Spirituality</p>
                    </div>
                    <div class="col-md-4">
                      <h4>Promotes</h4>
                      <p>Ethical Values</p>
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
            <h4>Architectural</h4>
            <p>Grandeur</p>
          </div>
          <div class="col-md-4">
            <h4>Centre for</h4>
            <p>Spirituality</p>
          </div>
          <div class="col-md-4">
            <h4>Promotes</h4>
            <p>Ethical Values</p>
          </div>
        </div>
      </div>
      <h2 Class="tmu-text-primary my-0 d-block d-lg-none text-center"><span>Mahaveer Ji  </span><span>Jinalaya</span></h2>
      <div class="row justify-content-center">
        <div class="col-lg-12 text-justify mb-2 mt-3">
          <p class="text-justify mb-2 mt-1 m-lg-5">
          TMU’s Mahaveer Ji Jinalaya is a serene and spiritual haven on campus, offering students, staff, and visitors a space for reflection and prayer. Designed to embody Jain values of peace and harmony, this holy site is an ideal retreat for moments of introspection. The Jinalaya plays a vital role in fostering holistic growth, blending spiritual development with academic pursuits. Its calming environment inspires mindfulness and inner peace, enriching the TMU community’s overall well-being.          </p>
        </div>
      </div>
    </div>

  

    <!-- Gallery Section -->
    <section class="gallery-section">
      <div class="container">
        <div class="gallery-header">
          <h2 Class="tmu-text-primary mb-2 mt-5"><span>Jinalaya </span><span>Gallery</span></h2>
          <p class="lead">Explore our jinalaya through these captivating images</p>
        </div>

        <div class="gallery-grid">
          <!-- Academic Blocks -->
          <div class="gallery-item" data-category="academic">
            <img src="{{asset('/assets/img/footer_pages/jinalaya/1.jpg')}}"
              alt="Main Academic Block">
            <div class="gallery-item-info">
              <h3 class="gallery-item-title">Teerthanker Mahaveer Jinalaya</h3>
              <p class="gallery-item-category">Jinalaya</p>
            </div>
          </div>

          <div class="gallery-item" data-category="academic">
            <img src="{{asset('/assets/img/footer_pages/jinalaya/2.jpg')}}"
              alt="Engineering Block">
            <div class="gallery-item-info">
              <h3 class="gallery-item-title">Teerthanker Mahaveer Jinalaya</h3>
              <p class="gallery-item-category">Jinalaya</p>
            </div>
          </div>

          <!-- Sports -->
          <div class="gallery-item" data-category="sports">
            <img src="{{asset('/assets/img/footer_pages/jinalaya/3.jpg')}}"
              alt="Sports Complex">
            <div class="gallery-item-info">
              <h3 class="gallery-item-title">Worship Hall</h3>
              <p class="gallery-item-category">Jinalaya</p>
            </div>
          </div>

          <div class="gallery-item" data-category="sports">
            <img src="{{asset('/assets/img/footer_pages/jinalaya/4.jpg')}}"
              alt="Cricket Ground">
            <div class="gallery-item-info">
              <h3 class="gallery-item-title">Riddhi Siddhi Bhawan</h3>
              <p class="gallery-item-category">Jinalaya</p>
            </div>
          </div>

          <!-- Library -->
          <div class="gallery-item" data-category="library">
            <img src="{{asset('/assets/img/footer_pages/jinalaya/5.jpg')}}"
              alt="Central Library">
            <div class="gallery-item-info">
              <h3 class="gallery-item-title">Riddhi Siddhi Bhawan Stage</h3>
              <p class="gallery-item-category">Jinalaya</p>
            </div>
          </div>

          <div class="gallery-item" data-category="library">
            <img src="{{asset('/assets/img/footer_pages/jinalaya/6.jpg')}}"
              alt="Digital Library">
            <div class="gallery-item-info">
              <h3 class="gallery-item-title">Riddhi Siddhi Bhawan Stage</h3>
              <p class="gallery-item-category">Jinalaya</p>
            </div>
          </div>

          <!-- Campus Life -->
          <div class="gallery-item" data-category="campus">
            <img src="{{asset('/assets/img/footer_pages/jinalaya/7.jpg')}}"
              alt="Student Center">
            <div class="gallery-item-info">
              <h3 class="gallery-item-title">Dashlakshan Preparation</h3>
              <p class="gallery-item-category">Jinalaya</p>
            </div>
          </div>

          <div class="gallery-item" data-category="campus">
            <img src="{{asset('/assets/img/footer_pages/jinalaya/8.jpg')}}"
              alt="Cafeteria">
            <div class="gallery-item-info">
              <h3 class="gallery-item-title">Mandir Renovation</h3>
              <p class="gallery-item-category">Jinalaya</p>
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
