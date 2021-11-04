//Custom slider
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

//Dots controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}


function showSlides(n) {
  let i;
  let slides = document.querySelectorAll(".mySlides");
  let dots = document.querySelectorAll(".dot");

  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length
  }
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

//Sticky nav
$(document).scroll(function () {
  const nav = $(".my_nav");
  nav.toggleClass('scrolled', $(this).scrollTop() > nav.height());
});
// $(document).scroll(function () {
//   const nav = $(".my_nav");
//   nav.toggleClass('scrolled', $(this).scrollTop() > nav.height());
// });

// AOS.init({
//   duration: 1200,
// })

