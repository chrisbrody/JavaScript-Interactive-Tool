$(document).ready(function() {
	$(".solutionbutton").click(function() {
		$(".answer").slideToggle();
     	$("html, body").animate({scrollTop: $(".answer").offset().top});
	});
});

$( "#tabs" ).tabs();

function beginTutorial() {
	window.location.assign('html/meta.php');
}

function checkMeta() {
	var answer = document.getElementById('userAnswer').innerText;
	console.log(answer);
	if (answer == '<meta charset="utf-8">') {
		alert('correct');
	} else {
		alert('incorrect');
	}
}