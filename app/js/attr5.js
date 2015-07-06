// check user answer
function checkAttr5() {

  var userAnswerStart = $('.userAnswerAttr').text().toLowerCase(),
      userAnswer = userAnswerStart.replace(/'/g, "\""),
      opening = '<img',
      class1 = 'alt="placeholder image">',
      closing = '>';
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
function resetAttrCode5() {
  var y = $('.userAnswerId');
  y.text('>');
  userEntered = false;
  $('.metaIncorrect').removeClass('text1');
  $('.metaCorrect').removeClass('text1');
}

// add src source to view when user addes an src of placeholder.jpg to their img tag
$('.userAnswerId').keyup( function() {
  var x = $(this).text().trim();
  var y = x.replace(/alt="|"|>/g, "");
  var z = y.trim(y);
  for( var i = 0; i < x.length; i++ ) {
    $('.browserContent section div#two img').attr('alt', z);   
  }
});
