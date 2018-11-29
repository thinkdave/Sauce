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
	// -- END TESTIMONIAL SLIDER -----------------------------------

	// TEAM GRID
    function mediaSize() { 
    	/* Set the matchMedia */
    	
		if (window.matchMedia('(min-width: 768px)').matches) {

			$('.block-team-bios .team-member.has-bio').on('click', function() {

	            var member = $(this);
	            var team = member.parent().parent();
	            var summaryContainer  = team.next();

	            $('.team-member').removeClass('active');
	            member.addClass('active');

	            summaryContainer.find('.col').html(member.find('.member-bio-mobile-inner').clone());
	            
	            setTimeout(function(){
	                $('html, body').animate({
	                    scrollTop: summaryContainer.offset().top - 100
	                }, 300);
	            }, 300);
	                   
	            if (summaryContainer.hasClass('active')) {
	                // do nothing
	            }else {
	                $('.team-grid .summary.active').slideUp(200).removeClass('active');
	                summaryContainer.slideDown(200).addClass('active');
	            }
	            return false;
	        });

	        $('.summary .close').click(function(){
	             $(this).parent().parent().parent().slideUp(200).removeClass('active');
	             $('.team-member').removeClass('active');
	             return false;
	        });			
	    // if smaller than 768px
		} else {
				$('.block-team-bios .team-member .member-bio-desktop .more-info a').on('click', function() {
					if ($(this).parent().parent().parent().hasClass('has-bio')) {
				    	$(this).parent().parent().next().slideToggle();
				    }
			    return false;
			});
		   		$('.block-team-bios .team-member.has-bio .member-bio-mobile a.close').click(function(){
					$(this).parent().slideUp();
					return false;
				});		
		}
	};
	/* Call the function */
  	mediaSize();
  	/* Attach the function to the resize event listener */
	window.addEventListener('resize', mediaSize, false); 
	// -- END TEAM GRID -----------------------------------
});
