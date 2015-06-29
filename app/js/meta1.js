function checkMeta1() {
	var userAnswer = $('.userAnswerMeta span').text();
	var    answer1 = '<meta charset="utf-8">';
	var    answer2 = "<meta charset='utf-8'>";
	var    answer3 = '<meta charset="UTF-8">';
	var    answer4 = "<meta charset='UTF-8'>";

	if (userAnswer == answer1) {
		$('.metaCorrect').toggleClass('text1');
	} else if (userAnswer == answer2) {
		$('.metaCorrect').toggleClass('text1');
	} else if (userAnswer == answer3) {
		$('.metaCorrect').toggleClass('text1');
	} else if (userAnswer == answer4) {
		$('.metaCorrect').toggleClass('text1');
	} else {
		$('.metaIncorrect').toggleClass('text1');
	}
}