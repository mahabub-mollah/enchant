jQuery(document).ready(function($) {
	$('a.openClose').click(function(){
		$(this).toggleClass('active');
        $('.mainMenu').slideToggle();
    });
	
	$('.bnrArrow').on('click',function(){
		var secid = $(this).attr('href');
		$('body,html').animate({scrollTop:$(secid).offset().top},'slow');
	});
	
	$('.mainMenu li a').on('click',function(){
		var secid = $(this).attr('href');
		$('body,html').animate({scrollTop:$(secid).offset().top},'slow');
	});
	
	$( "#datepicker" ).datepicker({
		showOn: "button",
		buttonImage: "images/calendar.png",
		buttonImageOnly: true,
		buttonText: "Select date"
	});
	
	$(".bookNow,.sec4_popUp,.sec6_pop,.media_pop").fancybox({
		'width':600,
		'autoSize':false
	});
	
	$('.sec3_left .cmnBtn').click(function(){
		$(".sec3_left p span").show();
    });
	
	$('.sec3_right .cmnBtn').click(function(){
		$(".sec3_right p span").show();
    });
});