/*
 * Jens Andersson 2015
 * Main Script
 */

//Changes .active on gallery buttons
$(document).ready(function(){
    $("#gallery nav button").click(function(){
        $(this).addClass("active").siblings().removeClass("active");
    });
});


$(window).scroll(function() {
	var scroll = $(window).scrollTop();

	if (scroll >= 500) {
		$("#header").addClass("scroll");
	} else {
		$("#header").removeClass("scroll");
	}
});