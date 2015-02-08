$(document).ready(function(){

//click on menu to slide over
$('ul#portmenu').animate({left: '-=250'},3200);





$('#menuRecall').click(function(){
	$('ul#portmenu').animate({left: '+=250'},1200);
});

//click on project to make the black overlay fade out
	$('section').click(function() {
		
		$(this).css('visibility','hidden');
	
	});
////************************	



});
// $( "button" ).click(function() {
//   $( "p" ).slideToggle( "slow" );
// });