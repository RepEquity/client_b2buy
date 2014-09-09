jQuery(document).ready(function($) {
	
	/*Events*/
	$('#mobile-menu-icon').on('click', function(){
		$('html, body').animate({ scrollTop: 0 }, 0);
		$('#main-menu').toggleClass('open');
		$('#mobile-menu-icon').toggleClass('open');
		$('#main-header').toggleClass('open');
		$('body').toggleClass('open');
		$('#main-menu').slideToggle(500);
		$('.current-menu-parent').addClass('open');
		
		return false;
	});
	
	menuWithChildren();
	
	$( window ).resize(function() {
		menuWithChildren();
	});
			
	$('.menu-item-has-children .sub-menu li a').on('click', function(){
		$('.menu-item-has-children').unbind('click');
	});
	
	
	
	$('.search-icon').on('click', function(){
		$('.search-icon').toggleClass('open');
		$('#searchform').toggle( "slide" );
		return false;
	});
	
	$('#menu-news-filter li.current-menu-item').on('click', function(event){
	  	$('#menu-news-filter li').toggleClass('open');
	  	return false;
  	})		
	
	$('#menu-main-menu').append('<span class="stretcher"></span>');
	
	
	$(window).on('scroll', function(){
		if($('.sub-page-navigation').length > 0) {
			if($(window).scrollTop() >= 252){
				if(!$('.sub-page-navigation').hasClass('locked')){
					$('.sub-page-navigation').addClass('locked');
					$('.page-header').addClass('locked');
				}
			} else {
				if($('.sub-page-navigation').hasClass('locked')){
					$('.sub-page-navigation').removeClass('locked');
					$('.page-header').removeClass('locked');
				}
			}
		}
	
		
	});
	
	loadModals();
	  
	$('.video').on('click', '.video', function(){
		var modal;
		modal = $(this).data('video');
		$("#"+ modal).dialog('open');
	});

	var $isMobile = checkMobile();
		
	$(window).resize(function(){	
		$isMobile = checkMobile();
		
		if($isMobile) {
			$('#main-menu').hide();
			$('#main-header').removeClass('open');
			$('#mobile-menu-icon').removeClass('open');
			$(".process li").removeClass('active');
			$('.process').removeClass('active');
			
		} else {
			$('#main-menu').show();
		}
	});
	
	
	$(".process li").on('click', function(){
		$(this).toggleClass('active');
		if($isMobile){
			$(this).siblings().removeClass('active');
		}
		if($('.process li').hasClass('active')) {
			$('.process').addClass('active');
		}else{
			$('.process').removeClass('active');
		}
	})

	    
});

function menuWithChildren(){
	if (jQuery('#mobile-menu-icon').css('display') == 'none') {
		jQuery('.menu-item-has-children').unbind('click');
	} else {
		jQuery('.menu-item-has-children').unbind('click').bind('click', function(e){
			e.preventDefault();
			jQuery(this).toggleClass('open');
			return false;
		});
	}	

}

function selectInvestment(thisObj){
	jQuery('#investment-placeholder').empty();
	jQuery('.investment-logo img').removeClass('selected');
	thisObj.find('.investment-logo img').addClass('selected');
	var investment  = thisObj.find('.investment-content-wrapper').html();
	jQuery('#investment-placeholder').html(investment);
}

function loadModals(){
	jQuery(".dialog-modal").dialog({
	      autoOpen: false,
	      modal: true,
	      close: function( event, ui ) {
	      	var url = jQuery('#'+event.target.id+' iframe').attr('src');
	      	jQuery('#'+event.target.id+' iframe').attr('src', '');
	      	jQuery('#'+event.target.id+' iframe').attr('src', url);
	      }
	  });
}

//Test For mobile view
function checkMobile() {
	if (jQuery("#mobile-menu-icon").css("display") == "none" ){
		return false;
	} else {
		return true;
	}

}
