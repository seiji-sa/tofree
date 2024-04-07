
jQuery(".openbtn1").on("click", function () {
  (this).toggleClass('active');
});



jQuery(function(){
  jQuery('.slider').slick({
      centerMode: true,
      centerMode: true,
      centerPadding: '60px',
      slidesToShow: 3,
      dots: true,
      arrows: true,
      variableWidth: true,
      responsive: [
          {
              breakpoint: 768,
              settings: {
                  arrows: true,
                  centerMode: true,
                  centerPadding: '40px',
                  slidesToShow: 1
              }
          }
      ]
  });
});



