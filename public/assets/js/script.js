$(document).ready(function(){
	changemapbg();
	fitToscreen();
});
$(window).resize(function(){
	fitToscreen();
});
function changemapbg(){
	// $(".intro-map-bg").css({"background-position-x":-Math.random()*500,"background-size":"auto "+(100 + 30*Math.random())+"%" })
	// setTimeout(changemapbg,4000);
}
function fitToscreen(){
	$(".screenfit").css("height",$(window).height());
}
function openpage(name){
	if(name !="home"){
		$("section").hide()
		$(".intro-map-bg").hide();
		$("."+name).show();
		$(".navig").hide();
		$(".home").hide();
		$(".backtohome").show();
		return false;		
	}
	$("section").slideUp("fast");
	$(".home").show();
	$(".intro-map-bg").show();
	$(".backtohome").fadeOut("fast");
	$(".navig").fadeIn("fast");
}
