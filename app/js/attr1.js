// check user answer
function checkAttr1() {

	var userAnswerStart = $('.userAnswerAttr').text().toLowerCase(),
	    userAnswer = userAnswerStart.replace(/'/g, "\""),
	    opening = '<div',
	    id = 'id="box">',
	    closing = '</div>';
	    console.log(userAnswer);
	if ( userAnswer.includes(opening) && userAnswer.includes(id) && userAnswer.includes(closing) && userAnswer.length > 22 ) {
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
function resetAttrCode1() {
	var x = $('.userAnswerConent'),
	    y = $('.userAnswerId');
	x.text('Write Content Here').css('color', '#5C5C5C');
	y.text('>');
	userEntered = false;
	$('.metaIncorrect').removeClass('text1');
	$('.metaCorrect').removeClass('text1');
}
// append h2 content to h2 view
$('.userAnswerConent').keyup(function() {
	var z = $(this).text();
    $('.browserContent h2').text(z);
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
// add id of box to view when user addes and id of box to ttheir div
$('.userAnswerId').keyup( function() {
	var x = $(this).text();
	for( var i = 0; i < x.length; i++ ) {
		console.log(x);
		if( x.includes('id="box"') ) {
			$('.browserContent h2').addClass('box');
		}
	}
});

