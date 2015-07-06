// check user answer
function checkAttr4() {

	var userAnswerStart = $('.userAnswerAttr').text().toLowerCase(),
	    userAnswer = userAnswerStart.replace(/'/g, "\""),
	    opening = '<img',
	    class1 = 'src="placeholder.jpg">',
	    closing = '>';
	    onsole.log('user answer 1: '+userAnswer);
	if ( userAnswer.includes(opening) && userAnswer.includes(class1) && userAnswer.length > 26 ) {
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
function resetAttrCode4() {
	var y = $('.userAnswerId');
	y.text('>');
	userEntered = false;
	$('.metaIncorrect').removeClass('text1');
	$('.metaCorrect').removeClass('text1');
}

// add src source to view when user addes an src of placeholder.jpg to their img tag
$('.userAnswerId').keyup( function() {
	var x = $(this).text().trim();
	var y = x.replace(/src="|"|>/g, "");
	var z = y.trim(y);
	for( var i = 0; i < x.length; i++ ) {
		$('.browserContent section div#two img').attr('src', z);		
	}
});
