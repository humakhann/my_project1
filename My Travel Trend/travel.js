$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
      loop: true,
      autoplay:true,
      autoplayTimeout: 2000,
      margin: 1,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: true,
        },

        1300: {
          items: 5,
          nav: false,
      
         },
        // 1200: {
        //   items: 5,
        //   nav: false,
      
        // },

        900: {
          items: 3,
          nav: false,
        },
        // 900: {
        //   items: 4,
        //   nav: false,
        // },
        500: {
          items: 1.5,
          nav: false,
        },
        // 600: {
        //   items: 3,
        //   nav: false,
        // },
        // 600: {
        //   items: 2,
     
        // },
        // 400: {
        //   items: 2,
        //   nav: true,
        // },
        // 300: {
        //   items: 1,
        //   nav: true,
        // },
        // 200: {
        //   items: 1,
        //   nav: true,
        // },

       
        // 1000: {
        //   items: 3,
        //   nav: true,
        //   loop: true,
        // },
      },
    });
  });

  

  