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
	$('#meta1Incorrect').removeClass('text1');
	$('#meta1Correct').removeClass('text1');
}

function checkMeta1() {
	var userAnswer = $('.userAnswerMeta span').text();
	var    answer1 = '<meta charset="utf-8">';
	var    answer2 = "<meta charset='utf-8'>";
	var    answer3 = '<meta charset="UTF-8">';
	var    answer4 = "<meta charset='UTF-8'>";

	if (userAnswer == answer1) {
		$('#meta1Correct').toggleClass('text1');
	} else if (userAnswer == answer2) {
		$('#meta1Correct').toggleClass('text1');
	} else if (userAnswer == answer3) {
		$('#meta1Correct').toggleClass('text1');
	} else if (userAnswer == answer4) {
		$('#meta1Correct').toggleClass('text1');
	} else {
		$('#meta1Incorrect').toggleClass('text1');
	}
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
