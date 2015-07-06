// reveal solution for chosen exercise
$(document).ready(function() {
	$(".solutionbutton").click(function() {
		$(".answer").slideToggle();
     	$("html, body").animate({scrollTop: $(".answer").offset().top});
	});
	$( ".tabs" ).tabs();
	$("html, body").animate({ scrollTop: $('.leftsidebar .instructions').height() }, 1000);
});

// track if user clicked where they give user answer
var userEntered = false;
var userEntered2 = false;

// reset code for chosen exercise
function resetMetaCode1() {
	var x = $('.userAnswerMeta .indent2');
	x.text('Write your meta tag here').css('color', '#5C5C5C');
	userEntered = false;
	$('.metaIncorrect').removeClass('text1');
	$('.metaCorrect').removeClass('text1');
}
// on user click for the first time clear user answer placeholder text and track that they entered
$('.userAnswerMeta span').click(function() {
		if (userEntered === false) {
		userEntered = true;
		$('.userAnswerMeta span').text(' ');
	}
});
// change color of user answer on keydown
$('.userAnswerMeta').keydown (function() {
	$('li[contenteditable="true"] span').css('color', '#fff');
});
// change title in view tab
$('.title').keyup(function() {
	var z = $('.title').text();
    $('.browserTab span').text(z);
});
$('.header1').keyup(function() {
	var z = $('.header1').text();
    $('.browserContent h1').text(z);
});

// show courses on button click
function showCourses() {
	$('#courses').slideToggle();
}
