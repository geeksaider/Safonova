const eventsCarousel = document.querySelector("#events-carousel > div");
const slides = eventsCarousel.children;
const prevBtn = document.getElementById("events-prev");
const nextBtn = document.getElementById("events-next");
const prevBtnMob = document.getElementById("events-prev__mobile");
const nextBtnMob = document.getElementById("events-next__mobile");
const eventsIndicators = document.querySelectorAll(".events-indicator");
const total = slides.length;

let current = 0;

function updateCarousel() {
  eventsCarousel.style.transform = `translateX(-${current * 100}%)`;
  eventsIndicators.forEach((el, id) => {
    el.classList.toggle("bg-secondary-700", id === current);
    el.classList.toggle("bg-gray-300", id !== current);
    el.classList.toggle("opacity-80", id === current);
  });
}

prevBtn.onclick = function () {
  current = (current - 1 + total) % total;
  updateCarousel();
};

prevBtnMob.onclick = function () {
  current = (current - 1 + total) % total;
  updateCarousel();
};
nextBtnMob.onclick = function () {
  current = (current + 1) % total;
  updateCarousel();
};

nextBtn.onclick = function () {
  current = (current + 1) % total;
  updateCarousel();
};

eventsIndicators.forEach((el, id) => {
  el.onclick = function () {
    current = id;
    updateCarousel();
  };
});

updateCarousel();
