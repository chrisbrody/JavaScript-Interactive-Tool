// check user answer
function checkAttr1() {

	var userAnswerStart = $('.userAnswerAttr').text().toLowerCase(),
	    userAnswer = userAnswerStart.replace(/'/g, "\""),
	    opening = '<section',
	    id = 'id="section_wrapper">',
	    closing = '</section>';
	if ( userAnswer.includes(opening) && userAnswer.includes(id) && userAnswer.includes(closing) && userAnswer.length > 40 ) {
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
function resetAttrCode1() {
	var x = $('.userAnswerConent'),
	    y = $('.userAnswerId');
	x.text('Write Content Here').css('color', '#5C5C5C');
	y.text('>');
	userEntered = false;
	$('.metaIncorrect').removeClass('text1');
	$('.metaCorrect').removeClass('text1');
}


// append section content to section view
$('.userAnswerConent').keyup(function() {
	var z = $(this).text();
    $('.browserContent section').text(z);
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
// add id of wrapper to view when user addes an id of wrapper to their section tag
$('.userAnswerId').keyup( function() {
	var x = $(this).text();
	for( var i = 0; i < x.length; i++ ) {
		if( x.includes('id="section_wrapper"') ) {
			$('.browserContent section').addClass('section_wrapper');
		} else {
			$('.browserContent section').removeClass('section_wrapper');
		}
	}
});
