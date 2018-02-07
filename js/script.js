jQuery(document).ready(function($) {
  // $('.home-slider').slick({
  //     infinite: true,
	 //  slidesToShow: 3,
	 //  slidesToScroll: 3
  // });


/**
 *
 * Mac Type Slider, big in the middle
 *
 */
	$('.home-slider').slick({
	  centerMode: true,
	  centerPadding: '60px',
	  slidesToShow: 3,
	  responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	        arrows: false,
	        centerMode: true,
	        centerPadding: '10px',
	        slidesToShow: 2
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        arrows: false,
	        centerMode: true,
	        centerPadding: '10px',
	        slidesToShow: 1
	      }
	    }
	  ]
	});



});