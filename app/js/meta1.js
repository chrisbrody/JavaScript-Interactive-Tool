function checkMeta1() {
	var userAnswerStart = $('.userAnswerMeta span').text().toLowerCase(),
	    userAnswer = userAnswerStart.replace(/'/g, "\""),
	    answer1 = '<meta charset="utf-8">';

	if (userAnswer == answer1) {
		$('.metaCorrect').toggleClass('text1');
	} else {
		$('.metaIncorrect').toggleClass('text1')
						 .delay(4500)
						 .queue(function() {
						 	$(this).removeClass('text1');
						 	$(this).dequeue();
						 });
	}
}