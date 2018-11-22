jQuery(function( $ ){

	// Add class on scroll
	var fixedHeader = $('body');
    $(window).scroll( function() {
        if( $(this).scrollTop() > 32 ) {
            fixedHeader.addClass( 'sticky-header' );
        } else {
            fixedHeader.removeClass( 'sticky-header' );
        }
    });

	// Mobile Menu
	$(".responsive-menu-icon").click(function(){
    $(this).addClass('clicked');
		$(this).next(".menu").slideToggle();
		$("#nav").toggleClass('openwide');
		$('.site-header').toggleClass('nav-toggle');
	});


	$("#nav .menu > .menu-item").click(function(event){
		if (event.target !== this)
		return;
			$(this).find(".sub-menu:first").slideToggle(function() {
			$(this).parent().toggleClass("menu-open");
		});
	});

	$("#nav .menu > .menu-item .arrow").click(function(event){
			$(this).parent().find(".sub-menu:first").slideToggle(function() {
			$(this).parent().parent().toggleClass("menu-open");
		});
	});

	

    // Disable Jump on empty menu links
    $('.disabled-link > a').click( function(e){
        e.preventDefault();
    });

    // BLOCK ACCORDION
	$('.block-accordion .item-title h3').on('click', function() {
		$(this).parent().next().slideToggle();
        $(this).toggleClass('active');
        return false;
    });
	
	// HERO SLIDER
	var hero_slider = $('.hero-slides-wrapper');
	if((hero_slider).length) {
		$('.hero-slider .hero-slides-wrapper').slick({
			autoplay: true,
			autoplaySpeed: 5000,
			dots: true,
			arrows: true,
			infinite: true,
			speed: 300,
			slidesToShow: 1,
			fade: true,
			adaptiveHeight: true
		});
	}

	// TESTIMONIAL SLIDER
	var testimonial_slider = $('.testimonial-slides-wrapper');
	if((testimonial_slider).length) {
		$('.testimonial-slider .testimonial-slides-wrapper').slick({
			autoplay: true,
			autoplaySpeed: 5000,
			dots: true,
			arrows: false,
			infinite: true,
			speed: 300,
			slidesToShow: 1,
			fade: true,
			adaptiveHeight: true
		});
	}

});
