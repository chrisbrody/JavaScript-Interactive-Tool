$(document).ready(function() {
	$(".solutionbutton").click(function() {
		$(".answer").slideToggle();
     	$("html, body").animate({scrollTop: $(".answer").offset().top});
	});
});

$( "#tabs" ).tabs();

function resetMetaCode1() {
	console.log('reset');
	var x = $('#userAnswerMeta1 .indent2');
	x.text('Write your meta tag here').css('color', '#5C5C5C');
	userEntered = false;
	console.log(userEntered);
}

function checkMeta1() {
	var userAnswer = $('#userAnswerMeta1 span').text();
	var    answer1 = '<meta charset="utf-8">';
	var    answer2 = "<meta charset='utf-8'>";
	var    answer3 = '<meta charset="UTF-8">';
	var    answer4 = "<meta charset='UTF-8'>";

	console.log(userAnswer);
	if (userAnswer == answer1) {
		alert('correct');
	} else if (userAnswer == answer2) {
		alert('correct');
	} else if (userAnswer == answer3) {
		alert('correct');
	} else if (userAnswer == answer4) {
		alert('correct');
	} else {
		alert('incorrect');
	}
}

var userEntered = false;
$('#userAnswerMeta1 span').click(function() {
	
	

	if (userEntered === false) {
		console.log('user entered false');
		userEntered = true;
		console.log(userEntered);
		$('#userAnswerMeta1 span').text(' ');
	} else if (userEntered === true) {
		console.log('user entered true');
		console.log(userEntered);

	}
});

$('#userAnswerMeta1 span').on('blur' , function() {
        console.log('blurred');
    });

$('#userAnswerMeta1').keypress( function() {
	$('li[contenteditable="true"] span').css('color', '#fff');
});
