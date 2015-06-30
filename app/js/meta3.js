function checkMeta3() {

	var userAnswerStart = $('.userAnswerMeta span').text().toLowerCase(),
	    userAnswer = userAnswerStart.replace(/'/g, "\""),
	    meta = '<meta',
	    name = 'name="description"',
	    content = 'content="',
	    end = '">';
	
	if ( userAnswer.includes(meta) && userAnswer.includes(name) && userAnswer.includes(content) && userAnswer.includes(end) && userAnswer.length > 38) {
		$('.metaCorrect').toggleClass('text1');
	} else {
		$('.metaIncorrect').toggleClass('text1');
	}
}
