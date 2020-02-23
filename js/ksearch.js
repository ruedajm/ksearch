$(window).resize(function(){
	var $desktop = $('#desktop-view');
	var $mobile = $('#mobile-view');

	if ($(window).width() <= 990) {  
		$desktop.hide();
		$mobile.show();
	} else {
		$desktop.show();
		$mobile.hide();
	}

});


$(document).ready(function(){
	var $desktop = $('#desktop-view');
	var $mobile = $('#mobile-view');

	$desktop.show();
	$mobile.hide();

	var $likeBtn = $(".like-btn")
	var $likeDesktop = $(".button-icon.like");
	var $likeMobile = $(".lg-btn-icon.like");
	var $caret = $(".like-btn .fa");
	var $likeSpan = $('.like-btn .like-span');

	$likeBtn.click(function(){
		$caret.toggle();
		$likeDesktop.toggleClass("active");

		if ($likeDesktop.hasClass("active") || $likeMobile.hasClass("active")) {
			$likeSpan.html("Liked");
			$likeSpan.addClass("active");
			$likeDesktop.attr("src","/images/like-icon-active.png");
			$likeMobile.attr("src","/images/mobile/like-btn-icon-active.png");
		} else {
			$likeSpan.html("Like");
			$likeSpan.removeClass("active");
			$likeDesktop.attr("src","/images/like-icon.png");
			$likeMobile.attr("src","/images/mobile/like-btn-icon.png");
		}
	});

	var $followBtn = $(".follow-btn")
	var $followIcon = $(".lg-btn-icon.follow");
	var $followSpan = $('.follow-btn .follow-span');

	$followBtn.click(function() {
		$followIcon.toggleClass("active");
		
		if ($followIcon.hasClass("active")) {
			$followSpan.html("Following");
			$followSpan.addClass("active");
			$followIcon.attr("src","/images/mobile/follow-btn-icon-active.png");
		} else {
			$followSpan.html("Follow");
			$followSpan.removeClass("active");
			$followIcon.attr("src","/images/mobile/follow-btn-icon.png");
		}
	});

});


