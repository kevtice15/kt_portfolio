jQuery(document).ready(function($) {
	console.time("Yo");
	console.timeEnd("Yo");

	$('body').scroll(function(){
		console.log("ME");
	});


	function scrollingUp(){

	}

	function scrollingDown(){

	}

	var lastScrollTop = 0;

	// var scrollHandler = function(){
	// 		var st = $(window).scrollTop();
	// 		if (st > lastScrollTop){
	// 			console.log("lst: ", lastScrollTop);
	// 			console.log("st: ", st);
	// 			console.log("slide up activated");
	// 			$('.navbar').slideUp(700);
	// 		}
	// 		else {
	// 			console.log("lst: ", lastScrollTop);
	// 			console.log("st: ", st);
	// 			console.log("slide down activated");
	// 			$('.navbar').slideDown(700);
	// 		}
	// 	lastScrollTop = st;
	// 	console.log("scroll event detected! " + window.pageXOffset + " " + window.pageYOffset);
	// };

	// window.onscroll = scrollHandler;


});

