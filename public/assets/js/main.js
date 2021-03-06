$(function(){
	"use strict";
	var width = $(window).width();

	$("input[type*='text'], input[type*='password']").each(function(){
		if($(this).val()){
			$(this).parent().addClass('hasValue');
		}
	});
	$("input[type*='text'], input[type*='password']").on('change keyup copy paste cut', function(){
		if(!this.value) {
			$(this).parent().removeClass('hasValue');
		} else {
			$(this).parent().addClass('hasValue');
		}
	});
	$("label[for*='phone'], label[for*='qans']").click(function(){
		$(this).parent().siblings().removeClass('focus');
		$(this).parent().addClass('focus');
	});
	if ( width <= 768 ){
		$(".logo img[src*='img/logo-white.svg']").each(function(){
			$(this).attr('src', 'img/logo-blue.svg');
		});
	}
});