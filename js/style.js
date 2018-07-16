$(document).ready(function(){



	$('#frmsearch').slideUp();
	$('#btnshowsearch').click(function(){
		if ($("h2#h").html()=="1") {
			$('#frmsearch').slideDown();
			$('#btnshowsearch>i').removeClass("fa-search");
			$('#btnshowsearch>i').addClass("fa-times");
			$('#btnshowsearch>i').css("color","red");
			$('#txtsearch').focus();
			$("h2#h").html("0");

		}
		else {
			$('#frmsearch').slideUp();
			$('#btnshowsearch>i').removeClass("fa-times");
			$('#btnshowsearch>i').addClass("fa-search");
			$('#btnshowsearch>i').css("color","rgba(241, 196, 15,1.0)");
			$("h2#h").html("1");
		}
	});
	$('#gotop').click(function(){
		$('body,html').animate({scrollTop:0},500);
	});
	$('#gotop').fadeOut();
	$(window).scroll(function(){
				if ($(this).scrollTop()>300) {
					$('#gotop').fadeIn();
				}
				else{
					$('#gotop').fadeOut();
				}
	});
		var tw=parseInt($('.menu').css("width").split('px'));
		$('#w').html(tw);
		st=$('#w').text();
		$('.menu').css("transition","0.5s");
		$('.menu').css("width","30px");
	$('i.icaret').click(function(){
		var w=parseInt($('.menu').css("width").split('px'));
		if (w>30) {
			$('.menu').css("width","30px");
			// alert("0");
			$('.menu').css("overflow","hidden");
			$('i.icaret').css("transform","rotate(0deg)");
			$('#menu>li.ani').animate({opacity: '0'},500);
		}
		else{
			$('.menu').css("width",st+"px");
			$('i.icaret').css("transform","rotate(180deg)");
			// $('.menu').animate({overflow:'visible'},5000);
			$('#menu>li.ani').animate({opacity:'1'},500);
			$('.menu').css("overflow","visible");
			
			
		}
		
	});
	
	












	
	


	
});