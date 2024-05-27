// scrollNavbar.js

window.addEventListener("scroll", function () {
  var navbar = document.getElementById("navbar");
  var scrolled = window.scrollY;

  if (scrolled > 600) {
    navbar.classList.add("bg-biru");
  } else {
    navbar.classList.remove("bg-biru");
  }
});
