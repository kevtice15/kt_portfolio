jQuery(document).ready(function($) {
	console.time("Yo");
	console.timeEnd("Yo");

	$('body').scroll(function(){
		console.log("ME");
	});

	var scrollHandler = function(){
		console.log("scroll event detected! " + window.pageXOffset + " " + window.pageYOffset);
		if(window.pageYOffset > 135){
			console.log($('.navbar'));
		}
	};

	window.onscroll = scrollHandler;


});

