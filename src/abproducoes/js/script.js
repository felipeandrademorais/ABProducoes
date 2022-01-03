
jQuery(($) => {
    $('.depoimentos_slider').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 8000,
        pauseOnFocus: false,
        pauseOnHover: false,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        arrows: false,
    });
    $('.eventos_slider').slick({
      dots: true,
      arrows: true,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      adaptiveHeight: true
    });
});
