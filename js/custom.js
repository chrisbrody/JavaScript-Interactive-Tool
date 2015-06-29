$(document).ready(function() {
	$(".solutionbutton").click(function() {
		$(".answer").slideToggle();
     	$("html, body").animate({scrollTop: $(".answer").offset().top});
	});
	$( ".tabs" ).tabs();
});

var userEntered = false;

function resetMetaCode1() {
	var x = $('.userAnswerMeta .indent2');
	x.text('Write your meta tag here').css('color', '#5C5C5C');
	userEntered = false;
	$('#metaIncorrect').removeClass('text1');
	$('#metaCorrect').removeClass('text1');
}

$('.userAnswerMeta span').click(function() {
		if (userEntered === false) {
		userEntered = true;
		$('.userAnswerMeta span').text(' ');
	}
});

$('.userAnswerMeta').keydown (function() {
	$('li[contenteditable="true"] span').css('color', '#fff');
});

$('.title').keyup(function() {
	var z = $('.title').text();
    $('.browserTab span').text(z);
});
