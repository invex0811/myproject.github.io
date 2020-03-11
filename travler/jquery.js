$(document).ready(function() {

	$(".hide").click(function () {
	    $(".call-back").animate({
			left: '0'
		},"slow")
	});

	$(".close").click(function () {
	    $(".call-back").animate({
			left: '-100%'
		},"slow");
	});


});
