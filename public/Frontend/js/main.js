
// Top slider js
    $(document).ready(function(){
      $('.top-slider').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });

      
      $('.bottom-slider').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 4,
        arrows: true,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 3
            }
          },
          {
            breakpoint: 600,
            settings: {
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              centerMode: true,
              centerPadding: '35px',
              slidesToShow: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });
    });
