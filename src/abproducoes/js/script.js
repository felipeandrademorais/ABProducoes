
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
      dots: false,
      arrows: true,
      centerMode: true,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      adaptiveHeight: true,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            centerMode: false,
          }
        }
      ]
    });

    $('#modal-abertura').delay(3000).modal('show');

    setTimeout(function() { $('#modal-abertura').modal('hide'); }, 5000);
});
