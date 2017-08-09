;(function(window){
	
	
	window.Hopen = {
		
		global:{
			fontSize:'100px',
		},
		init:function(){
			$(window).resize(function(){
				
			     Hopen.global.fontSize = $(window).width()/7.5+'px !important';
				// document.getElementsByName(html).item(0).style.fontSize = Hopen.global.fontSize;
				 document.getElementsByTagName("html")[0].setAttribute("style", "font-size:" +Hopen.global.fontSize);
				 //$(html).css('font-size', Hopen.global.fontSize);
		  	});
			$(function(){
			    $('.js-back').on('click',function(){
				     history.go(-1);	
				});	
				
				$(window).on("load",function(){$('#appLoading').fadeOut(1000).remove();})
			})
			
		},
		
		alert:function(str){
		    alert(str);	
		}
		
	}
	
	
})(window);
function HP(){
	window.Hopen.init();
	return window.Hopen;
}



var HP = new HP();
!new function() {
	var a = this;
	a.width = 750, a.fontSize = 100, a.widthProportion = function() {
		var b = (document.body && document.body.clientWidth || document.getElementsByTagName("html")[0].offsetWidth) / a.width;
		return b > 1 ? 1 : b
	}, a.changePage = function() {
		document.getElementsByTagName("html")[0].setAttribute("style", "font-size:" + a.widthProportion() * a.fontSize + "px !important")
	}, a.changePage(), window.addEventListener("resize", function() {
		a.changePage()
	}, !1)
};