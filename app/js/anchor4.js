function checkAnchor4() {

	var userAnswerStart = $('.userAnswerAnchor').text().toLowerCase(),
	    userAnswer = userAnswerStart.replace(/'/g, "\""),
	    tag = '<a',
	    href = 'href="www.google.com"',
	    end = '>';
	
	if ( userAnswer.includes(tag) && userAnswer.includes(href) && userAnswer.includes(end) && userAnswer.length > 33) {
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
// reset code
function resetAnchorCode4() {
	var x = $('.userAnswerConent'),
	    y = $('.userAnswerId');
	x.text('Write Content Here').css('color', '#5C5C5C');
	y.text('>');
	userEntered = false;
	$('.metaIncorrect').removeClass('text1');
	$('.metaCorrect').removeClass('text1');
}


// clear content if user didnt enter answer area yet
$('.userAnswerConent').click(function() {
		if (userEntered === false) {
		userEntered = true;
		$(this).text(' ');
	}
});
// change color of user content when typing
$('.userAnswerConent').keydown (function() {
	$(this).css('color', '#fff');
});
