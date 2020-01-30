$(document).ready(function(){


// ---------slick simple-------------

$('.product-slick').slick({
    dots: true,
    infinite: true,
    autoplay: true,
    speed: 1200,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    alwaysSlide: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 980,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      }
    ]
  });
// ---------slick syncing-------------
$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  centerMode: true,
  focusOnSelect: true
});
});