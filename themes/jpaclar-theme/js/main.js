$(window).load(function(){
	$("body").css("opacity","1");

	$("#hamburger").click(function(){
   		$(this).toggleClass("active");
   		$("header").fadeToggle("fast");
	});

    
});