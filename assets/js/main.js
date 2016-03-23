$(function(){
	$('#landing,#carousel,#carousel .item,#carousel .item img').css({'height':(($(window).height())-(113*1.8))+'px'});

	$(window).resize(function(){
	    $('#landing,#carousel,#carousel .item,#carousel .item img').css({'height':(($(window).height())-(113*1.8))+'px'});
	});

	$('#carousel').carousel();

	$.localScroll();

	var object = $('.preview');

	if(Modernizr.touch){
		$('.excerpt').addClass('visible');
	}

	$('.fancybox').fancybox();

	$('.popup').fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'fade',
		closeEffect	: 'fade',
		arrows		: true
	});

	$('#gallery a').fancybox({
		openEffect	: 'fade',
		closeEffect	: 'fade',
		arrows		: true
	});

	$('.instagram').spectragram('getUserFeed',{
		max: 1,
		query: 'SpareRoomHwood',
		size: 'standard'
	});


//	Image Rotation for Gallery
	var block = 0
	var totalBlocks = 5
	var delay = 2000
	var fade = 800

	setInterval(function() {
		changeImage(block);
		if (block == totalBlocks) {
			block = 0;
		} else {
			block++;
		}
	}, delay);

	function changeImage(block) {
		var $liArr = $('.gallery span');
		var $currLi = $liArr.eq(block);
		var $currImg = $('.gallery-img:visible', $currLi);
		if ($currImg.next().length == 1) {
			var $next = $currImg.next();
		} else {
			var $next = $('.gallery-img:first', $currLi);
		}

		$currImg.fadeOut(fade);
		$next.fadeIn(fade);
	}

	$('#gallery').find('a').each(function(){
		$bgSrc = $(this).find('img').attr('src');
		$(this).css({
			'background-image' : 'url(' + $bgSrc + ')'
		});
	});

	$('.item, .card').each(function(){
	   $imgBG = $(this).find('img');
	   $imgBG.css({'visibility':'hidden'});
	   $(this).css({
		  'background-image' : 'url('+$imgBG.attr('src')+')'
	   });
	});

});