document.addEventListener("DOMContentLoaded", function () {
  const slides = document.querySelectorAll(".slide");
  let currentIndex = 0;

  document.getElementById("nextBtn").addEventListener("click", function () {
    slides[currentIndex].classList.add("hidden");
    currentIndex = (currentIndex + 1) % slides.length;
    slides[currentIndex].classList.remove("hidden");
  });

  document.getElementById("prevBtn").addEventListener("click", function () {
    slides[currentIndex].classList.add("hidden");
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    slides[currentIndex].classList.remove("hidden");
  });
});
