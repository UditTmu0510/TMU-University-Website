@extends('layouts.university.main')
@section('content')

<section id="content">
  <div class="content-wrap py-0">

    <section class="hero-section">
      <div id="campusCarousel" class="carousel slide hero-slider" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active hero-slide">
            <img src="{{asset('/assets/img/footer_pages/banner/dance-music.jpg')}}"
              class="hero-image" alt="Campus View">
            <div class="content-overlay">
              <div class="container">
                <h1 class="section-title d-none d-lg-block" style="color: white;">Music &  <span> Dance</span></h1>
                <div class="stat-box d-none d-lg-inline-block">
                  <div class="row">
                    <div class="col-md-4">
                      <h4>Well Equipped</h4>
                      <p>Studio</p>
                    </div>
                    <div class="col-md-4">
                      <h4>Annual Cultural</h4>
                      <p>Festivals</p>
                    </div>
                    <div class="col-md-4">
                      <h4>Enhancing</h4>
                      <p>Teamwork</p>
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
            <h4>Well Equipped</h4>
            <p>Studio</p>
          </div>
          <div class="col-md-4">
            <h4>Annual Cultural</h4>
            <p>Festivals</p>
          </div>
          <div class="col-md-4">
            <h4>Enhancing</h4>
            <p>Teamwork</p>
          </div>
        </div>
      </div>
      <h2 Class="tmu-text-primary my-0 d-block d-lg-none text-center"><span>Music & </span><span>Dance</span></h2>
      <div class="row justify-content-center">
        <div class="col-lg-12 text-justify mb-2 mt-3">
          <p class="text-justify mb-2 mt-1 m-lg-5">
          The Music and Dance Room at TMU is a lively hub for artistic expression and creativity. This vibrant space is equipped with professional-grade musical instruments, soundproof rehearsal rooms, and spacious studios, enabling students to refine their skills and explore their talents. Audio-visual recording facilities provide opportunities for students to document and enhance their performances. The welcoming and energetic environment allows students to develop their artistic potential to the fullest.
          </p>
        </div>
      </div>
    </div>


    <section class="gallery-section">
      <div class="container">
        <div class="gallery-header">
          <h2 Class="tmu-text-primary mb-2 mt-5"><span>Music & Dance </span><span>Gallery</span></h2>
          <p class="lead">Explore our performances through these captivating images</p>
        </div>

        <div class="gallery-grid">
          <div class="gallery-item" data-category="academic">
            <img src="{{asset('/assets/img/footer_pages/dance/1.jpg')}}"
              alt="Main Academic Block">
            <div class="gallery-item-info">
              <h3 class="gallery-item-title">Singer with Acoustic Guitar</h3>
              <p class="gallery-item-category">Music & Dance</p>
            </div>
          </div>

          <div class="gallery-item" data-category="academic">
            <img src="{{asset('/assets/img/footer_pages/dance/2.jpg')}}"
              alt="Engineering Block">
            <div class="gallery-item-info">
              <h3 class="gallery-item-title">Qawwali</h3>
              <p class="gallery-item-category">Music & Dance</p>
            </div>
          </div>

          <div class="gallery-item" data-category="sports">
            <img src="{{asset('/assets/img/footer_pages/dance/3.jpg')}}"
              alt="Sports Complex">
            <div class="gallery-item-info">
              <h3 class="gallery-item-title">Singer with Electric Guitar</h3>
              <p class="gallery-item-category">Music & Dance</p>
            </div>
          </div>

          <div class="gallery-item" data-category="sports">
            <img src="{{asset('/assets/img/footer_pages/dance/4.jpg')}}"
              alt="Cricket Ground">
            <div class="gallery-item-info">
              <h3 class="gallery-item-title">Cultural Fest</h3>
              <p class="gallery-item-category">Music & Dance</p>
            </div>
          </div>

          <div class="gallery-item" data-category="library">
            <img src="{{asset('/assets/img/footer_pages/dance/5.jpg')}}"
              alt="Central Library">
            <div class="gallery-item-info">
              <h3 class="gallery-item-title">Cultural Fest</h3>
              <p class="gallery-item-category">Music & Dance</p>
            </div>
          </div>

          <div class="gallery-item" data-category="library">
            <img src="{{asset('/assets/img/footer_pages/dance/6.jpg')}}"
              alt="Digital Library">
            <div class="gallery-item-info">
              <h3 class="gallery-item-title">Bharatnatyam</h3>
              <p class="gallery-item-category">Music & Dance</p>
            </div>
          </div>

          <div class="gallery-item" data-category="campus">
            <img src="{{asset('/assets/img/footer_pages/dance/7.jpg')}}"
              alt="Student Center">
            <div class="gallery-item-info">
              <h3 class="gallery-item-title">Contemporary</h3>
              <p class="gallery-item-category">Music & Dance</p>
            </div>
          </div>

          <div class="gallery-item" data-category="campus">
            <img src="{{asset('/assets/img/footer_pages/dance/8.jpg')}}"
              alt="Cafeteria">
            <div class="gallery-item-info">
              <h3 class="gallery-item-title">Folk Dance</h3>
              <p class="gallery-item-category">Music & Dance</p>
            </div>
          </div>

          <div class="gallery-item" data-category="campus">
            <img src="{{asset('/assets/img/footer_pages/dance/9.jpg')}}"
              alt="Hostel Block">
            <div class="gallery-item-info">
              <h3 class="gallery-item-title">Religious Drama</h3>
              <p class="gallery-item-category">Music & Dance</p>
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
