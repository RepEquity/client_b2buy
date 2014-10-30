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
	
	
	// $(".process li").on('click', function(){
	// 	$(this).toggleClass('active');
	// 	if($isMobile){
	// 		$(this).siblings().removeClass('active');
	// 	}
	// 	if($('.process li').hasClass('active')) {
	// 		$('.process').addClass('active');
	// 	}else{
	// 		$('.process').removeClass('active');
	// 	}
	// })

	    
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

function tracking_code($name){
	switch($name) {
	    
	    case 'cameras':
	    	sas_tmstp=Math.round(Math.random()*10000000000);var image = document.createElement("img");
            var imageParent = document.getElementById("body");
            image.src= "http://www5.smartadserver.com/track/pix2.asp?228934;18965;"+sas_tmstp+";0;[transactionid];[reference]";
            image.width = 1;
            image.height = 1;
            document.getElementsByTagName('body')[0].appendChild(image);
	        break;
	    
	    case 'gps':
	    	sas_tmstp=Math.round(Math.random()*10000000000);var image = document.createElement("img");
            var imageParent = document.getElementById("body");
            image.src= "http://www5.smartadserver.com/track/pix2.asp?228934;18966;"+sas_tmstp+";0;[transactionid];[reference]";
            image.width = 1;
            image.height = 1;
            document.getElementsByTagName('body')[0].appendChild(image);
	        
	        break;
	    
	    case 'learn_more':
	    	sas_tmstp=Math.round(Math.random()*10000000000);var image = document.createElement("img");
            var imageParent = document.getElementById("body");
            image.src= "http://www5.smartadserver.com/track/pix2.asp?228934;18964;"+sas_tmstp+";0;[transactionid];[reference]";
            image.width = 1;
            image.height = 1;
            document.getElementsByTagName('body')[0].appendChild(image);
	    	break;    
	    
	    case 'medical_tools':
	    	sas_tmstp=Math.round(Math.random()*10000000000);var image = document.createElement("img");
            var imageParent = document.getElementById("body");
            image.src= "http://www5.smartadserver.com/track/pix2.asp?228934;18967;"+sas_tmstp+";0;[transactionid];[reference]";
            image.width = 1;
            image.height = 1;
            document.getElementsByTagName('body')[0].appendChild(image);
	    	break;
	    	
	    case 'office_chairs':
	    	sas_tmstp=Math.round(Math.random()*10000000000);var image = document.createElement("img");
            var imageParent = document.getElementById("body");
            image.src= "http://www5.smartadserver.com/track/pix2.asp?228934;18968;"+sas_tmstp+";0;[transactionid];[reference]";
            image.width = 1;
            image.height = 1;
            document.getElementsByTagName('body')[0].appendChild(image);
	    	break;
	    	
	    case 'office_printers':
	    	sas_tmstp=Math.round(Math.random()*10000000000);var image = document.createElement("img");
            var imageParent = document.getElementById("body");
            image.src= "http://www5.smartadserver.com/track/pix2.asp?228934;18969;"+sas_tmstp+";0;[transactionid];[reference]";
            image.width = 1;
            image.height = 1;
            document.getElementsByTagName('body')[0].appendChild(image);
	    	break;
	    	
	    case 'phones':
	    	sas_tmstp=Math.round(Math.random()*10000000000);var image = document.createElement("img");
            var imageParent = document.getElementById("body");
            image.src= "http://www5.smartadserver.com/track/pix2.asp?228934;18970;"+sas_tmstp+";0;[transactionid];[reference]";
            image.width = 1;
            image.height = 1;
            document.getElementsByTagName('body')[0].appendChild(image);
	    	break;
	    	
	    case 'projectors':
	    	sas_tmstp=Math.round(Math.random()*10000000000);var image = document.createElement("img");
            var imageParent = document.getElementById("body");
            image.src= "http://www5.smartadserver.com/track/pix2.asp?228934;18971;"+sas_tmstp+";0;[transactionid];[reference]";
            image.width = 1;
            image.height = 1;
            document.getElementsByTagName('body')[0].appendChild(image);
	    	break;
	    	
	    case 'routers':
	    	sas_tmstp=Math.round(Math.random()*10000000000);var image = document.createElement("img");
            var imageParent = document.getElementById("body");
            image.src= "http://www5.smartadserver.com/track/pix2.asp?228934;18972;"+sas_tmstp+";0;[transactionid];[reference]";
            image.width = 1;
            image.height = 1;
            document.getElementsByTagName('body')[0].appendChild(image);
	    	break;
	    	
	    case 'start_b2buy':
	    	sas_tmstp=Math.round(Math.random()*10000000000);
            var image = document.createElement("img");
            var imageParent = document.getElementById("body");
            image.src= "http://www5.smartadserver.com/track/pix2.asp?228934;18963;"+sas_tmstp+";0;[transactionid];[reference]";
            image.width = 1;
            image.height = 1;
			document.getElementsByTagName('body')[0].appendChild(image);
	    	break;
	    	
	    case 'storage':
	    	sas_tmstp=Math.round(Math.random()*10000000000);var image = document.createElement("img");
            var imageParent = document.getElementById("body");
            image.src= "http://www5.smartadserver.com/track/pix2.asp?228934;18973;"+sas_tmstp+";0;[transactionid];[reference]";
            image.width = 1;
            image.height = 1;
            document.getElementsByTagName('body')[0].appendChild(image);
	    	break;
	    
	    case 'television':
	    	sas_tmstp=Math.round(Math.random()*10000000000);var image = document.createElement("img");
            var imageParent = document.getElementById("body");
            image.src= "http://www5.smartadserver.com/track/pix2.asp?228934;18974;"+sas_tmstp+";0;[transactionid];[reference]";
            image.width = 1;
            image.height = 1;
            document.getElementsByTagName('body')[0].appendChild(image);
	    	break;
	    
	    case 'toner':
	    	sas_tmstp=Math.round(Math.random()*10000000000);var image = document.createElement("img");
            var imageParent = document.getElementById("body");
            image.src= "http://www5.smartadserver.com/track/pix2.asp?228934;18975;"+sas_tmstp+";0;[transactionid];[reference]";
            image.width = 1;
            image.height = 1;
            document.getElementsByTagName('body')[0].appendChild(image);
	    	break;
	    	   
	    default:
	    	break;
	}
	
	
}
