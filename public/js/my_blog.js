// All code written by Paul Love
//March 2015
(function ( $ ) {
	var targetNumber = 10;
	var clicks = 0;
	var width = $(window).width();

	
		var f = 0, fasomocks = [
		'/images/faso_landing_mock.png',
		'/images/faso_blog_mock.png',
		'/images/faso_single_mock.png',
		'/images/faso_collections_mock.png'
		];
		var i = 0, mocks = [
		'/images/servesearchMock.jpg',
		 '/images/tabletevent.jpg',
		 '/images/tablettable.jpg',
		 '/images/comp.jpg',
		'/images/tablet.jpg'
		];
	$('#serveImages').attr('src',mocks[i]);
	$('#fasoImages').attr('src',fasomocks[f]);
	
	
	
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
				$('#serveImages').attr('src',mocks[++i]);
				console.log(mocks[i]);
	}
	function changeImageFaso() {
			if(f >= fasomocks.length) return;
				$('#fasoImages').attr('src',fasomocks[++f]);
				console.log(mocks[f]);
	}
	function prevImage() {
			if(i < 0) return;
				$('#serveImages').attr('src',mocks[--i]);

	}
	function prevImageFaso() {
			if(f < 0) return;
				$('#fasoImages').attr('src',fasomocks[--f]);

	}
	function toggleFaso(){
		if($('#faso').hasClass('hidden'))
		{
			$("#faso").removeClass("hidden");
			
			console.log('hello');
		} 
	}
	function toggleServeSearch(){
		if($('#servelink').hasClass('hidden'))
		{
			$("#servelink").removeClass("hidden");
			
			console.log('hello serve');
		}
	}

if(jQuery.browser.mobile)
{
   console.log('You are using a mobile device!');
	$('.serveInfo').hide();
	$("button").removeClass("hidden");
}
else
{
	$(window).resize(function(){location.reload();});
   console.log('You are not using a mobile device!');
}
	$('#changeImage').click(function(){
		changeImage();
		if(i >= 1){
			$('.serveInfo').css('visibility', 'hidden');

		}
	})
	$('#changeImageFaso').click(function(){
		changeImageFaso();
		
	})
	$('#prevImage').click(function(){
		prevImage();
		if(i < 1){
			$('.serveInfo').css('visibility', 'visible');
		} 
		
	})
	$('#prevImageFaso').click(function(){
		prevImageFaso();
		
	});
	$('.duckInfo').width($('#duckImages').width()/1.01);
	$('.serveInfo').width($('#serveImages').width()/1.01);
	$('.fasoInfo').width($('#fasoImages').width()/1.01);
	$('.textcontent').width($('.container').width());
	$('.textcontent').each(function(){
	      var parentHeight = $(this).parent().height();
	      $(this).height(parentHeight);    
	});

	$('#changeImageFaso').hover(function(){
		$("#faso").addClass("hidden");	
		
	})
	$('#prevImageFaso').hover(function(){
		$("#faso").addClass("hidden");
	})
	$('span').mouseover(function(){

		$("button ").removeClass("hidden");
		toggleFaso();
	})
	// $('span #servelink').mouseleave(function(){
	// 	$("button ").addClass("hidden");
		
		
	// })
	$('#changeImage').hover(function(){
		$("#servelink").addClass("hidden");
		
		
	})
	$('#prevImage').hover(function(){
		$("#servelink").addClass("hidden");
		

		
		
	})
	$('span').mouseover(function(){
		$("button").removeClass("hidden");
		toggleServeSearch();
	})
	
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

$('#deleteMargin').hover(function(){
		// $('#servelink').fadeToggle(260,"swing");
		//FIX THIS SOON ..DO WHAT YOU DID FOR THE FASO SITE
		// $('#faso').fadeToggle(260,"swing");
});
$(".img-size").mouseover(function(){
		$(this).text('Click');
		// $(this).css('z-index','0');
});
$('#prevImage').width($('#serveImages').width()/5);
$('#changeImage').width($('#serveImages').width()/5);
$('#prevImageFaso').width($('#fasoImages').width()/5);
$('#changeImageFaso').width($('#fasoImages').width()/5);

$('#prevImage ').height($('.img-size').height());
$('#changeImage ').height($('.img-size').height());
$('#prevImageFaso ').height($('.img-size').height());
$('#changeImageFaso ').height($('.img-size').height());

$(function(){
  $(".ripple").materialripple();
});		




}( jQuery ));

