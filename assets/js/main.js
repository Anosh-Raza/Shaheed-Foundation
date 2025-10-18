// Slider Initialization
document.addEventListener("DOMContentLoaded", function () {
  const slides = document.querySelectorAll('.slide');
  const prevBtn = document.querySelector('.prev');
  const nextBtn = document.querySelector('.next');
  const dotsContainer = document.querySelector('.slider-dots');

  if (!slides.length || !prevBtn || !nextBtn || !dotsContainer) return;

  let currentSlide = 0;

  // Create dots
  slides.forEach((_, i) => {
    const dot = document.createElement('span');
    if (i === 0) dot.classList.add('active');
    dotsContainer.appendChild(dot);
  });
  const dots = document.querySelectorAll('.slider-dots span');

  function showSlide(index) {
    slides.forEach((slide, i) => {
      slide.classList.remove('active');
      dots[i].classList.remove('active');
      if (i === index) {
        slide.classList.add('active');
        dots[i].classList.add('active');
      }
    });
    currentSlide = index;
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
  }

  function prevSlide() {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(currentSlide);
  }

  let slideInterval = setInterval(nextSlide, 5000);

  function resetInterval() {
    clearInterval(slideInterval);
    slideInterval = setInterval(nextSlide, 5000);
  }

  nextBtn.addEventListener('click', () => {
    nextSlide();
    resetInterval();
  });
  prevBtn.addEventListener('click', () => {
    prevSlide();
    resetInterval();
  });
  dotsContainer.addEventListener('click', (e) => {
    if (e.target.tagName === 'SPAN') {
      const index = [...dots].indexOf(e.target);
      showSlide(index);
      resetInterval();
    }
  });
});


// Stacked Image Gallery Initialization
const imgs = document.querySelectorAll('.stacked-container img');
let idx = 0;
let interval;

function updateStacked() {
  imgs.forEach(i => i.className = '');
  const total = imgs.length;
  const center = idx;
  const left1 = (center - 1 + total) % total;
  const right1 = (center + 1) % total;
  const left2 = (center - 2 + total) % total;
  const right2 = (center + 2) % total;

  imgs[center].classList.add('active');
  imgs[left1].classList.add('level-2-left');
  imgs[right1].classList.add('level-2-right');
  imgs[left2].classList.add('level-3-left');
  imgs[right2].classList.add('level-3-right');
}

function nextImage() {
  idx = (idx + 1) % imgs.length;
  updateStacked();
}

function startGallery() {
  interval = setInterval(nextImage, 1500);
}

function stopGallery() {
  clearInterval(interval);
}

const container = document.querySelector('.stacked-container');
container.addEventListener('mouseenter', stopGallery);
container.addEventListener('mouseleave', startGallery);

updateStacked();
startGallery();



