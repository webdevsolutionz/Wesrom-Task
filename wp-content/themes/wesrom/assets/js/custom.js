function onshow() {
    var element = document.getElementById("head-nav");
    element.classList.toggle("show");
    var element = document.getElementById("main-wrapper");
    element.classList.toggle("show");
  }
$(document).ready(function(){

$('.testimonial-slides').slick({
    centerMode: true,
    slidesToShow: 1.8,
    slidesToScroll: 1,
    autoplay: false,
    Infinity:true,
    autoplaySpeed: 2000,
    initialSlide: 1,
    nav:true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: true,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
            initialSlide:0,
          centerMode: true,
          centerPadding: '0px',
          slidesToShow: 1
        }
      }
    ]
  });

});