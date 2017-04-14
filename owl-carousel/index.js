$('.owl-carousel').owlCarousel({
    loop:true,
    dots: false,
    nav:true,
	  navText: [],
	  navElement:'i',
	  navClass: ['fa fa-arrow-right', 'fa fa-arrow-left'],
    responsive:{
      0:{
        items:1
      },
      600:{
        items:1
      },
      1000:{
        items:1
      }
    }
  });
