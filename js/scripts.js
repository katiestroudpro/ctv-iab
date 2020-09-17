$(document).ready(function() {
		
		//////////////////////////////////
		// SCRIPTS FOR THE INDEX PAGE
		/////////////////////////////////
		
		// DROPDOWN MENU ANIMATION
		$('#headerContent ul ').find('ul').show().hide();
		$('#headerContent ul > li').hover(function() {
			$(this).children('ul').stop().fadeIn(300);
		}, function() {
			$(this).children('ul').stop().fadeOut('fast');
		});

		// MAIN ROUND SLIDER
		$('ul#mainSlider').roundabout({
			btnNext: ".next",
			btnPrev: ".prev"
		});
		
		// RECENT WORKS SLIDER
        //move the last item before the first one so that if the user clicks the previous arrow he will see the last item.
		$('#carousel li:first').before($('#carousel li:last')); 
        
        //click next        
        $('#right_scroll').click(function(){
        
            //get the width of the items
            var item_width = $('#carousel li').outerWidth() + 10;
            
            //calculae the new left indent of the unordered list
            var left_indent = parseInt($('#carousel').css('left')) - item_width;
            
            //make the sliding effect using jquery's anumate function
            $('#carousel:not(:animated)').animate({'left' : left_indent},500,function(){    
                
			//get the first list item and put it after the last list item (that's how the infinite effects is made)
			$('#carousel li:last').after($('#carousel li:first')); 
							
			//and get the left indent to the default -280px
			$('#carousel').css({'left' : '-280px'});
            }); 
        });
        
        //click previous
        $('#left_scroll').click(function(){
            
			//get the width of the items
            var item_width = $('#carousel li').outerWidth() + 10;
            
            //same as for sliding right except that it's current left indent + the item width (for the sliding right it's - 				
			//item_width
            var left_indent = parseInt($('#carousel').css('left')) + item_width;
            
			//make the sliding effect using jquery's anumate function
            $('#carousel:not(:animated)').animate({'left' : left_indent},500,function(){    
            
            //when sliding to left we are moving the last item before the first list item        
            $('#carousel li:first').before($('#carousel li:last')); 
            
            //and again, when we make that change we are setting the left indent of our unordered list to the default -280px */
            $('#carousel').css({'left' : '-280px'});
            });  
        });

		// IE ADJUSTMENTS  
		if (($.browser.version == '7.0') || ($.browser.version == '8.0')) {
			$('#ourCheckList ul li:last-child').css('border-bottom', 'none');
			$('#footerInfo li:nth-child(3)').css('float', 'right').css('margin-right', '0');
			$('#footerInfo li:nth-child(5)').css('float', 'right').css('margin-right', '0');
		}
		
		
		/////////////////////////////////////////
		// SCRIPTS FOR THE INDEX SLIDESHOW PAGE
		/////////////////////////////////////////
		
		//SLIDESHOW ANIMATION
		$('#mainSlideshowContainer').css('overflow', 'hidden');
		$('ul#mainSlides').cycle({
			fx: 'fade',
			pause: 1,
			cleartype:false,
			prev: '.prev',
			next: '.next'
		});
		
		
		//////////////////////////////////
		// SCRIPTS FOR THE ABOUT PAGE
		/////////////////////////////////
		
		//IE ADJUSTMENTS
		if (($.browser.version == '7.0') || ($.browser.version == '8.0')) {
			$('#about .threeBoxesOrange:last-child').css('margin-right', '0');
			$('#team ul li:last-child').css('margin-right', '0');
		}
		
		
		//////////////////////////////////
		// SCRIPTS FOR THE SERVICES PAGE
		/////////////////////////////////
		
		//IE ADJUSTMENTS
		if (($.browser.version == '7.0') || ($.browser.version == '8.0')) {
			$('#services .threeBoxesGrey:nth-child(3n)').css('margin-right', '0');
			$('#services .threeBoxesGrey:nth-child(n+3)').css('margin-bottom', '0');
		}
		
		
		//////////////////////////////////
		// SCRIPTS FOR THE PORTFOLIO PAGE
		//////////////////////////////////
		
		//FILTRABLE PORTFOLIO
		$clientsHolder = $('ul.portfolioItems');
		$clientsClone = $clientsHolder.clone(); 
		 
		$('.filterPortfolio a').click(function(e) {
			e.preventDefault();
		 
			$filterClass = $(this).attr('class');
		 
			$('.filterPortfolio li').removeClass('active');
			$(this).parent().addClass('active');
			if($filterClass == 'all'){
				$filters = $clientsClone.find('li');
			} else {
				$filters = $clientsClone.find('li[data-type~='+ $filterClass +']');
			}
			
			$clientsHolder.quicksand($filters, {
				duration: 1000,
				adjustHeight: 'dynamic' 
			});
			
		});	
		
		//IE ADJUSTMENTS
		if (($.browser.version == '7.0') || ($.browser.version == '8.0')) {
			$('.portfolioProjectThumbs li:last-child').css('margin-right', '0');
		}
		
		
		///////////////////////////////////////////
		// SCRIPTS FOR THE PORTFOLIO PROJECT PAGE
		///////////////////////////////////////////
		
		//VIEW THE BOTTOM THUMBNAILS
		$("a[rel^='prettyPhoto']").prettyPhoto({
			social_tools: ''
		});
		
		
		///////////////////////////////
		// SCRIPTS FOR THE BLOG PAGES
		///////////////////////////////
		
		// ACCORDION
		$('.accordion > li > a').click(function(e){
			if ($(this).attr('class') != 'activeAccordion'){
				$('.accordion li ul').slideUp();
				$(this).next().slideToggle();
				$('.accordion li a').removeClass('activeAccordion');
				$(this).addClass('activeAccordion');
			}
			e.preventDefault();
		});
		$('.accordion li:first ul').show();		
		
		// TABS
		$(function() {
			$('ul.tabs').delegate('li:not(.current)', 'click', function() {
				$(this).addClass('current').siblings().removeClass('current')
				.parents('section.blogTabs').find('div.box').eq($(this).index()).fadeIn(300).siblings('div.box').hide();
			})
		});
		
		//IE ADJUSTMENTS
		if (($.browser.version == '7.0') || ($.browser.version == '8.0')) {
			$('div.box ul li:last-child').css('border-bottom', 'none');
			$('div.visible ul li:last-child').css('border-bottom', 'none');
			$('div.box ul li:last-child').css('margin-bottom', '0');
			$('div.visible ul li:last-child').css('margin-bottom', '0');
			$('.postComments form input:nth-child(2)').css('float', 'right');
		}
		
		// FORM VALIDATION
		$('#postCommentsForm').html5form({
				async : false,
				allBrowsers : true,
				method : 'POST',
				emptyMessage : 'This is a required field!',
				emailMessage : 'This email address is not correct, please try again!',
				responseDiv : '#response',
				colorOn: '#959494',
        		colorOff: '#959494'
		});
		
		
		//////////////////////////////////
		// SCRIPTS FOR THE CONTACT PAGES
		//////////////////////////////////
		
		//IE ADJUSTMENTS
		if (($.browser.version == '7.0') || ($.browser.version == '8.0')) {
			$('#contact form input:nth-child(3)').css('float', 'right');
			$('#contact form input:nth-child(5)').css('float', 'right');
		}
		
		// FORM VALIDATION
		$('#contactForm').html5form({
				async : false,
				allBrowsers : true,
				method : 'POST',
				emptyMessage : 'This is a required field!',
				emailMessage : 'This email address is not correct, please try again!',
				responseDiv : '#response',
				colorOn: '#959494',
        		colorOff: '#959494'
		});    
		
		
		//////////////////////////////////
		// SCRIPTS FOR THE READ MORE PAGE
		//////////////////////////////////
		
		//IE ADJUSTMENTS
		if (($.browser.version == '7.0') || ($.browser.version == '8.0')) {
			$('ul.stats li:last-child').css('margin-right', '0');
		}
		
});