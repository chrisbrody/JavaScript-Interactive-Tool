// check user answer
function checkAttr3() {

	var userAnswerStart = $('.userAnswerAttr').text().toLowerCase(),
	    userAnswer = userAnswerStart.replace(/'/g, "\""),
	    opening = '<a',
	    class1 = 'href="http://google.com">',
	    closing = '</a>';
	if ( userAnswer.includes(opening) && userAnswer.includes(class1) && userAnswer.includes(closing) && userAnswer.length > 32 ) {
		$('.metaCorrect').toggleClass('text1');
	} else {
		$('.metaIncorrect').toggleClass('text1')
						 .delay(3000)
						 .queue(function() {
						 	$(this).removeClass('text1');
						 	$(this).dequeue();
						 });
	}

}
// reset code
function resetAttrCode3() {
	var x = $('.userAnswerConent'),
	    y = $('.userAnswerId');
	x.text('Write Content Here').css('color', '#5C5C5C');
	y.text('>');
	userEntered = false;
	$('.metaIncorrect').removeClass('text1');
	$('.metaCorrect').removeClass('text1');
}

// append anchor content to div#one anchor view
$('.userAnswerConent').keyup(function() {
	var z = $(this).text();
    $('.browserContent section div#one a').text(z);
});
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

// add href anchor to view when user addes an  href of http://google.com to their a tag
$('.userAnswerId').keyup( function() {
	var x = $(this).text();
	var y = x.replace(/href="|"|>/g, "");
	var z = y.trim(y);
	for( var i = 0; i < x.length; i++ ) {
		$('.browserContent section div#one a').attr('href', z);
	}
});
