jQuery('html').removeClass('no-js').addClass('js');$(window).ready(updateResponsive);
$(window).resize(updateResponsive);$(window).resize(mapHeight);$(window).load(mapHeight);$(window).load(function() {    /* ==============================================    Preloader    =============================================== */    var preloaderDelay = 350,        preloaderFadeOutTime = 800;    function hidePreloader() {        var loadingAnimation = $('#loading-animation');        var preloader = $('#preloader');        loadingAnimation.fadeOut();        preloader.delay(preloaderDelay).fadeOut(preloaderFadeOutTime);    }    hidePreloader();});$(document).ready(function() {		$(".fancybox").fancybox();	});function updateResponsive() {	var width = $('#bottomcanvas').width();		if ($(window).width() < 768) {				}
}
function mapHeight(){
		var div5 = $(".map-div");
		var width3 = $(".map-div").width();
		
		div5.css("height", 0.6*width3);
		
		if ($(window).width()>768) {
			$("#contact .box").css("height", 0.6*width3);
		}else{
			$("#contact .box").css("height", "");
		}
		

}
$("#signup-mainpage").hover(function(){	$("#signup-mainpage").css("background", "url(css/images/button_signup_in.png) no-repeat")}, function(){	$("#signup-mainpage").css("background", "url(css/images/button_signup.png) no-repeat")});$("#submit-mainpage").hover(function(){	$("#submit-mainpage").css("background", "url(css/images/button_submit_in.png) no-repeat")}, function(){	$("#submit-mainpage").css("background", "url(css/images/button_submit.png) no-repeat")});$('#form-mainpagecanvas').on('shown.bs.collapse', function (e) {	var distTop = $('#signup-mainpage').offset().top;	$("section#home").animate({	  scrollTop: distTop-50	},"500");});$('#avatar-1, #avatar-2, #avatar-3, #avatar-4, #avatar-5, #avatar-6, #avatar-7, #avatar-8, #avatar-9, #avatar-10, #avatar-11, #avatar-12, #gameicon-1, #gameicon-2, #gameicon-3, #gameicon-4, #gameicon-5').popover({  trigger: 'hover',  placement: 'top',  })$('#team-1, #team-2, #team-3, #team-4, #team-5, #team-6, #team-7, #team-8, #team-9, #team-10, #team-11, #team-12').tab('show')