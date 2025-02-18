
// Js For collaboration cards
//Funcation to show collab popup modal
function showCollabModal() {
    const body = document.body;
    const modal = document.getElementById('collabModal');
    const clickedCard = event.target.closest('.collab-card');
    const cardImg = clickedCard.querySelector('.collab-card-img');
    const cardTitle = clickedCard.querySelector('.collab-card-title').textContent;
    const cardText = clickedCard.querySelector('.collab-card-text').textContent;
    const modalImg = modal.querySelector('.collab-card-img');
    const modalTitle = modal.querySelector('.collab-card-title');
    const modalText = modal.querySelector('.collab-card-text');

    if (modal && clickedCard) {
        modalImg.src = cardImg.src;
        modalTitle.textContent = cardTitle;
        modalText.textContent = cardText;
        modal.classList.add('active');
        body.classList.add('stop-body-scroll');
    }
}

// Functio to close the Collab popup modal
function closeCollabModal() {
    const body = document.body;
    const modal = document.getElementById('collabModal');

    if (modal) {
        modal.classList.remove('active');
        body.classList.remove('stop-body-scroll');
    }
}





// function to show testimonial popup modal
function showTestimonialModal() {
    const body = document.body;
    const modal = document.getElementById('testimonialModal');
    const clickedCard = event.target.closest('.media');
    const cardOverview = clickedCard.querySelector('.overview').innerHTML;
    console.log("this ", cardOverview);
    const cardText = clickedCard.querySelector('.testimonial > p:last-child').textContent;
    const cardImgSrc = clickedCard.querySelector('img').src;
    const modalImg = modal.querySelector('img');
    const modalOverview = modal.querySelector('.testimonial-user-name');
    const modalText = modal.querySelector('.testimonial-content');

    if (modal && clickedCard) {
        modalImg.src = cardImgSrc;
        modalOverview.innerHTML = cardOverview;
        modalText.textContent = cardText;
        modal.classList.add('active');
        body.classList.add('stop-body-scroll');
    }
}

function closeTestimonialModal() {
    const body = document.body;
    const modal = document.getElementById('testimonialModal');

    if (modal) {
        modal.classList.remove('active');
        body.classList.remove('stop-body-scroll');
    }
}

// Footer page gallery section js start
const gallery123 = document.querySelectorAll('.gallery123 img');
const lightbox123 = document.querySelector('.lightbox123');
let lightboxImg123;
if(lightbox123)
  lightboxImg123 = lightbox123.querySelector('img');

const closeBtn123 = document.querySelector('.close-btn123');
const prevBtn123 = document.querySelector('.prev-btn123');
const nextBtn123 = document.querySelector('.next-btn123');
let currentIndex123 = 0;

const showLightbox123 = (index) => {
  currentIndex123 = index;
  lightboxImg123.src = gallery123[index].src;
  lightbox123.style.display = 'flex';
};

const hideLightbox123 = () => {
  lightbox123.style.display = 'none';
};

const showPrev123 = () => {
  currentIndex123 = (currentIndex123 - 1 + gallery123.length) % gallery123.length;
  showLightbox123(currentIndex123);
};

const showNext123 = () => {
  currentIndex123 = (currentIndex123 + 1) % gallery123.length;
  showLightbox123(currentIndex123);
};

gallery123.forEach((img, index) => {
  img.addEventListener('click', () => showLightbox123(index));
});

if(closeBtn123)
  closeBtn123.addEventListener('click', hideLightbox123);
if(prevBtn123)
  prevBtn123.addEventListener('click', showPrev123);
if(nextBtn123)
  nextBtn123.addEventListener('click', showNext123);

if(lightbox123)
{
  lightbox123.addEventListener('click', (e) => {
    if (e.target === lightbox123) hideLightbox123();
  });
}

    // Footer page gallery section js end