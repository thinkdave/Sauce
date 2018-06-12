jQuery(function( $ ){

	// Mobile Menu
	$(".responsive-menu-icon").click(function(){
    $(this).addClass('clicked');
		$(this).next(".menu").slideToggle();
		$("#nav").toggleClass('openwide');
		$('.site-header').toggleClass('nav-toggle');
	});

	$(window).resize(function(){
		if(window.innerWidth > 680) {
			$("#nav .menu, #nav .menu .sub-menu").removeAttr("style");
			$("#nav .menu > .menu-item").removeClass("menu-open");
		}
	});

	$("#nav .menu > .menu-item").click(function(event){
		if (event.target !== this)
		return;
			$(this).find(".sub-menu:first").slideToggle(function() {
			$(this).parent().toggleClass("menu-open");
		});
	});

	// Fixed Header background on pages with a hero.
	var fixedHeader = $('body.has-hero');
	$(window).scroll( function() {
	if( $(this).scrollTop() > 65 ) {
	fixedHeader.removeClass( 'has-hero' );
	} else {
	fixedHeader.addClass( 'has-hero' );
	}
	});

});


