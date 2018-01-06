jQuery(document).ready(function() {
        		    jQuery('#wordpress-carousel-free-5a4b2dd56519f').slick({
			        infinite: true,
			        slidesToShow: 4,
			        slidesToScroll: 1,
			        prevArrow: "<div class='slick-prev'><i class='fa fa-angle-left'></i></div>",
	                nextArrow: "<div class='slick-next'><i class='fa fa-angle-right'></i></div>",
			        dots: false,
			        arrows: false,
			        autoplay: true,
		            responsive: [
						    {
						      breakpoint: 1199,
						      settings: {
						        slidesToShow: 4
						      }
						    },
						    {
						      breakpoint: 979,
						      settings: {
						        slidesToShow: 3
						      }
						    },
						    {
						      breakpoint: 767,
						      settings: {
						        slidesToShow: 2
						      }
						    },
						    {
						      breakpoint: 479,
						      settings: {
						        slidesToShow: 1
						      }
						    }
						  ]
		        });
    });