$(function(){

	var menu = $('#kebawah'),
		pos = menu.offset();

		$(window).scroll(function(){
			if($(this).scrollTop() > pos.top+menu.height() && menu.hasClass('non-sdt')){
				menu.fadeOut('fast', function(){
					$(this).removeClass('non-sdt').addClass('main').fadeIn('fast');
				});
			} else if($(this).scrollTop() <= pos.top && menu.hasClass('main')){
				menu.fadeOut('fast', function(){
					$(this).removeClass('main').addClass('non-sdt').fadeIn('fast');
				});
			}
		});

});

// masonry customization
jQuery(document).ready(function($) {
	var post_area = $('#post-area');
	post_area.imagesLoaded(function(){
		post_area.masonry({
		// options…
		isAnimated: true,
		animationOptions: {
			duration: 400,
			easing: 'linear',
			queue: false
		}
	});
	});
});