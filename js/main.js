jQuery(function( $ ){

	$(".responsive-menu-icon").click(function(){
    $(this).addClass('clicked');
		$(this).next(".menu").slideToggle();
		$("#nav").toggleClass('openwide');
		//$('.site-header').toggleClass('nav-toggle');
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

});
