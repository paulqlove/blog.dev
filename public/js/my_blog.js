// All code written by Paul Love
//March 2015
$(document).ready(function(){
	var targetNumber = 10;
	var clicks = 0;
	$('.textcontent').width($('.container').width());
	$('.textcontent').each(function(){
	      var parentHeight = $(this).parent().height();
	      $(this).height(parentHeight);    
	});
$('li.landingpage').load(function(){
		$('li.landingpage').css('background-color','#aee3ba');
});
$('#menuRecall').click(function(){
	if($(window).width() <= 768){
		$('ul#portmenu').animate({left: '+=100%'},250);
	} else {
		$('ul#portmenu').animate({left: '+=250'},250);
	}
});

$('#menuRecall').click(function(){
	if($(window).width() <= 768){
		$('ul#indexmenu').animate({left: '+=100%'},250);
	} else {
		$('ul#indexmenu').animate({left: '+=250'},250);
	}
});

$('#closeMenu').click(function(){
	if($(window).width() <= 768){
		$('ul#portmenu').animate({left: '-=100%'}, 250);
	} else {
		$('ul#portmenu').animate({left: '-=250'},250);
	}
});

$('#closeMenu').click(function(){
	if($(window).width() <= 768){
		$('ul#indexmenu').animate({left: '-=100%'}, 250);
	} else {
		$('ul#indexmenu').animate({left: '-=250'},250);
	}
});
$('.textcontent').hover(function(){
	$('.summary').css('color','black');
});
//*********************//
//**********MENU HOVER ACTIONS***********//
$('#textport').mouseover(function(){
	
	$(this).text('Portfolio');
});
$('#textport').mouseleave(function(){
	
	$(this).text('Work I\'ve Done');
});
$('#textresume').mouseover(function(){
	$(this).text('About Me');
});
$('#textresume').mouseleave(function(){
	$(this).text('Who I am');
});
$('#showIcons').click(function(){
	$(this).fadeOut(20);
	$("div:hidden").show(1700);
	$(this).css('margin-top', '0px');
});		
function countClicks() {
	if(clicks != 6){
		clicks++;
		console.log(clicks);
	} else if (clicks == 6){
		$('.portfolioProfile').attr('src','/images/youngme.png');
	} 
}
$('.portfolioProfile').click(function(){
		countClicks();
});
$(window).resize(function(){location.reload();});

});
