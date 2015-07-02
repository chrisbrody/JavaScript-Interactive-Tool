function checkMeta2() {

	var userAnswerStart = $('.userAnswerMeta span').text().toLowerCase(),
	    userAnswer = userAnswerStart.replace(/'/g, "\""),
	    meta = '<meta',
	    name = 'name="author"',
	    content = 'content="',
	    end = '">';
	
	if ( userAnswer.includes(meta) && userAnswer.includes(name) && userAnswer.includes(content) && userAnswer.includes(end) && userAnswer.length > 32) {
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
