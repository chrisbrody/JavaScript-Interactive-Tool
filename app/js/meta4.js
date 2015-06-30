function checkMeta4() {

	var userAnswerStart = $('.userAnswerMeta span').text().toLowerCase(),
	    userAnswer = userAnswerStart.replace(/'/g, "\""),
	    meta = '<meta',
	    name = 'name="keywords"',
	    content = 'content="',
	    end = '">';
	
	if ( userAnswer.includes(meta) && userAnswer.includes(name) && userAnswer.includes(content) && userAnswer.includes(end) && userAnswer.length > 34) {
		$('.metaCorrect').toggleClass('text1');
	} else {
		$('.metaIncorrect').toggleClass('text1');
	}
}
