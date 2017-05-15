 //backtobasics  social tooltip js
 jQuery(function(){
		jQuery('li').tooltip();
		jQuery("[data-toggle='tooltip']").tooltip();
		jQuery("[data-toggle='popover']").popover();
		
		
		
    });

	/*----------------------------------------------------*/
/*	Scroll To Top Section
/*----------------------------------------------------*/
	jQuery(document).ready(function () {
	
		jQuery(window).scroll(function () {
			if (jQuery(this).scrollTop() > 100) {
				jQuery('.backtobasics_scrollup').fadeIn();
			} else {
				jQuery('.backtobasics_scrollup').fadeOut();
			}
		});
	
		jQuery('.backtobasics_scrollup').click(function () {
			jQuery("html, body").animate({
				scrollTop: 0
			}, 600);
			return false;
		});
	
	});	

	
	jQuery.browser = {};
			(function () {
				jQuery.browser.msie = false;
				jQuery.browser.version = 0;
				if (navigator.userAgent.match(/MSIE ([0-9]+)\./)) {
					jQuery.browser.msie = true;
					jQuery.browser.version = RegExp.$1;
				}
			})();

			
 /*============================================
  Scrolling Animations
  ==============================================*/
 jQuery('.scrollimation').waypoint(function(){
     jQuery(this).addClass('in');
 },{offset:'100%'});