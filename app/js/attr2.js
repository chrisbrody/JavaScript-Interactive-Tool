// check user answer
function checkAttr2() {

	var userAnswerStart = $('.userAnswerAttr').text().toLowerCase(),
	    userAnswer = userAnswerStart.replace(/'/g, "\""),
	    opening = '<div',
	    class1 = 'class="box">',
	    closing = '</div>';
	var userAnswerStart2 = $('.userAnswerAttr2').text().toLowerCase(),
	    userAnswer2 = userAnswerStart2.replace(/'/g, "\""),
	    opening2 = '<div',
	    class2 = 'class="box">',
	    closing2 = '</div>';
	if ( userAnswer.includes(opening) && userAnswer.includes(class1) && userAnswer.includes(closing) && userAnswer2.includes(opening) && userAnswer2.includes(class1) && userAnswer2.includes(closing) && userAnswer.length > 25 && userAnswer2.length > 25 ) {
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
function resetAttrCode2() {
	var x = $('.userAnswerConent'),
		x2 = $('.userAnswerConent2'),
	    y = $('.userAnswerId'),
	    y2 = $('.userAnswerId2');
	x.text('Write Content Here').css('color', '#5C5C5C');
	x2.text('Write Content Here').css('color', '#5C5C5C');
	y.text('>');
	y2.text('>');
	userEntered = false;
	userEntered2 = false;
	$('.browserContent section div#one').removeClass('box');
	$('.browserContent section div#two').removeClass('box');
	$('.metaIncorrect').removeClass('text1');
	$('.metaCorrect').removeClass('text1');
}


// append div#one content to div#one view
$('.userAnswerConent').keyup(function() {
	var z = $(this).text();
    $('.browserContent section div#one').text(z);
});
// append div#two content to div#two view
$('.userAnswerConent2').keyup(function() {
	var z = $(this).text();
    $('.browserContent section div#two').text(z);
});
// clear content if user didnt enter answer area yet
$('.userAnswerConent').click(function() {
		if (userEntered === false) {
		userEntered = true;
		$(this).text(' ');
	}
});
$('.userAnswerConent2').click(function() {
		if (userEntered2 === false) {
		userEntered2 = true;
		$(this).text(' ');
	}
});
// change color of user content when typing
$('.userAnswerConent').keydown (function() {
	$(this).css('color', '#fff');
});
$('.userAnswerConent2').keydown (function() {
	$(this).css('color', '#fff');
});
// add class of box to view when user addes a class of box to their div tag
$('.userAnswerId').keyup( function() {
	var x = $(this).text();
	for( var i = 0; i < x.length; i++ ) {
		if( x.includes('class="box"') ) {
			$('.browserContent section div#one').addClass('box');
		} else {
			$('.browserContent section div#one').removeClass('box');
		}
	}
});
$('.userAnswerId2').keyup( function() {
	var x = $(this).text();
	for( var i = 0; i < x.length; i++ ) {
		if( x.includes('class="box"') ) {
			$('.browserContent section div#two').addClass('box');
		} else {
			$('.browserContent section div#two').removeClass('box');
		}
	}
});
