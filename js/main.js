/*
 * Jens Andersson 2015
 * Main Script
 */

$(document).ready(function() {
	//Changes .active on gallery buttons
    $("#gallery nav button").click(function() {
        $(this).addClass("active").siblings().removeClass("active");
    });

    // Adds .gallery-active on button click to gallery items
    // Ändra så det inte är så jävla långt
    // gör en .each(function() { ... });
	$("button").click(function() {
	    if($(this).data("filter") == "*"){
	    	$(".2013").addClass("gallery-active");
		    $(".2014").addClass("gallery-active");
		    $(".2015").addClass("gallery-active");
	    } else if($(this).data("filter") == "2013"){
	    	$(".2014").removeClass("gallery-active");
	    	$(".2015").removeClass("gallery-active");
	    	$(".2013").addClass("gallery-active");
	    } else if($(this).data("filter") == "2014"){
	    	$(".2013").removeClass("gallery-active");
	    	$(".2015").removeClass("gallery-active");
	    	$(".2014").addClass("gallery-active");
	    } else if($(this).data("filter") == "2015"){
	    	$(".2014").removeClass("gallery-active");
	    	$(".2013").removeClass("gallery-active");
	    	$(".2015").addClass("gallery-active");
	    }
	});

	/* Navigation Click */
		e.preventDefault();

		var hash = this.hash;

		$('html, body').animate({
			scrollTop: $(hash).offset().top
		}, 300, function() {
			window.location.hash = hash;
		});
	});

});

/* Navigation scroll */
$(window).scroll(function() {
	var scroll = $(window).scrollTop();

	if (scroll >= 500) {
		$("#header").addClass("scroll");
	} else {
		$("#header").removeClass("scroll");
	}
});