$(document).ready(function(){




$('.text-content').width($('body').width());

$('.text-content').each(function(){
      var parentHeight = $(this).parent().height();
      $(this).height(parentHeight);    
});

$('#menuRecall').click(function(){
	$('ul#portmenu').animate({left: '+=250'},200);
});
$('#menuRecall').click(function(){
	$('ul#indexmenu').animate({left: '+=250'},200);
});
$('.text-content').hover(function(){
	$('.summary').css('color','black');
});
//click on project to make the black overlay fade out
	$('section').click(function() {
		
		$(this).css('visibility','hidden');
	
	});
//*********************//
//**********MENU HOVER ACTIONS***********//
$('#text-port').mouseover(function(){
	
	$(this).text('Portfolio');
});
$('#text-port').mouseleave(function(){
	
	$(this).text('Work I\'ve Done');
});
$('#text-resume').mouseover(function(){
	$(this).text('Resume');
});
$('#text-resume').mouseleave(function(){
	$(this).text('Who I am');
});

$('#text-blog').mouseover(function(){
	$(this).text('Blog');
});
$('#text-blog').mouseleave(function(){
	$(this).text('My Blog');
});


});
