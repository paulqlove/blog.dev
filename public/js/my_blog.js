// All code written by Paul Love
//March 2015
$(document).ready(function(){
	var targetNumber = 10;
	var clicks = 0;
	var width = $(window).width();

	
		var i = 0, mocks = [
		 '/images/tabletevent.jpg',
		 '/images/tablettable.jpg',
		 '/images/comp.jpg',
		'/images/tablet.jpg',
		'/images/servesearchMock.jpg'
		];
	
	function countClicks() {
		if(clicks != 1){
			clicks++;
			console.log(clicks);
		} else if (clicks == 1){
			$('.portfolioProfile').attr('src','/images/youngme.png');
		} 
	}
	function changeImage() {
			if(i >= mocks.length) return;
				$('#serveImages').attr('src',mocks[i++]);
				console.log(mocks[i]);
	}
	function prevImage() {
			if(i < 0) return;
				$('#serveImages').attr('src',mocks[i--]);

	}
	$('#changeImage').click(function(){
		changeImage();
	});
	$('#prevImage').click(function(){
		prevImage();
	});

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

$('.portfolioProfile').click(function(){
		countClicks();
});
$('#servelink').click(function(){
	window.open('http://servesearch.us');
	
});
$('#bottemSpan').click(function(){
	window.open('/whackamole');
});
$('#deleteMargin').hover(function(){
		$('#servelink').fadeToggle({duration: 450, easeMethod: 'easeInCubic'});

});
$(".img-size").mouseover(function(){
		$(this).text('Click');
		$(this).css('z-index','0');
});
$('#prevImage').width($('#serveImages').width()/5);
$('#changeImage').width($('#serveImages').width()/5);

$('#prevImage ').height($('.img-size').height());
$('#changeImage ').height($('.img-size').height());

$(function(){
  $(".ripple").materialripple();
});		
// if ((width >= 480)) {
// 	$(window).resize(function(){location.reload();});
// } else {};

	


});



