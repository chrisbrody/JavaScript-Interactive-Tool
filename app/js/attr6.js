// check user answer
function checkAttr6() {

  var userAnswerStart = $('.userAnswerAttr').text().toLowerCase(),
      userAnswer = userAnswerStart.replace(/'/g, "\""),
      opening = '<p',
      class1 = 'title="intro paragraph"',
      closing = '>';
  if ( userAnswer.includes(opening) && userAnswer.includes(class1) && userAnswer.length > 20 ) {
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
function resetAttrCode6() {
  var x = $('.userAnswerConent'),
      y = $('.userAnswerId'),
      z = $('#two p');
  x.text('Content Here').css('color','#5C5C5C');
  y.text('>');
  z.text('Content Here');
  userEntered = false;
  $('.metaIncorrect').removeClass('text1');
  $('.metaCorrect').removeClass('text1');
}

// append anchor content to div#one anchor view
$('.userAnswerConent').keyup(function() {
  var z = $(this).text();
    $('.browserContent section div#two p').text(z);
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


// add src source to view when user addes an src of placeholder.jpg to their img tag
$('.userAnswerId').keyup( function() {
  var x = $(this).text().trim();
  var y = x.replace(/title="|"|>/g, "");
  var z = y.trim(y);
  for( var i = 0; i < x.length; i++ ) {
    $('.browserContent section div#two p').attr('title', z);  
  }
});
