$(document).ready(function(){

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

		$('ul#portmenu').animate({left: '+=100%'},200);
	} else {
		$('ul#portmenu').animate({left: '+=250'},200);
	}
});

$('#menuRecall').click(function(){

	if($(window).width() <= 768){
	
		$('ul#indexmenu').animate({left: '+=100%'},200);
	} else {
		$('ul#indexmenu').animate({left: '+=250'},200);
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
//click on project to make the black overlay fade out
	
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



// making rows clickable //
	$('#clickableRow tr').click(function() {
	    var href = $(this).find("a").attr("href");
	    if(href) {
	        window.location = href;
	    }
	});
});
