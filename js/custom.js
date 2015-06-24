$(document).ready(function() {
	$(".solutionbutton").click(function() {
		$(".answer").slideToggle();
     	$("html, body").animate({scrollTop: $(".answer").offset().top});
	});
});