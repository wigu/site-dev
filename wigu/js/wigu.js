jQuery('html').removeClass('no-js').addClass('js');

$(window).ready(openList);
$(window).ready(updateHeight);$(window).ready(updateHeight2);
$(window).resize(updateHeight);$(window).resize(updateHeight2);$(window).resize(openList);
$(window).resize(updateVideo);$(window).resize(mapHeight);$(window).load(updateVideo);$(window).load(mapHeight);function updateHeight() {
    var divdl = $('.container-doctorlife');
    var width = divdl.width();
    divdl.css('height', width/940*3555);			var divcl = $('.container-caninelife');    var width = divcl.width();    divcl.css('height', width/940*3152);
}
function updateHeight2() {
    var div2 = $('.carousel');
    
    div2.css('top', ($(window).width()/1024*39)+40);
}
function openList(){
	if($(window).width() < 768) {
		$(".dropdown").addClass("open");
	}else{
		$(".dropdown").removeClass("open");
	}
}
$(window).load(function() {

    /* ==============================================
    Preloader
    =============================================== */
    var preloaderDelay = 350,
        preloaderFadeOutTime = 800;

    function hidePreloader() {
        var loadingAnimation = $('#loader-animation'),
            preloader = $('#preloader');

        loadingAnimation.fadeOut();
        preloader.delay(preloaderDelay).fadeOut(preloaderFadeOutTime);
    }

    hidePreloader();

});// one page website transition
$(document).ready(function() {
	
	

    var wWidth = $(window).width(),
        mobileRes = 767;

    function stopEvent(event){
        event.preventDefault();
        event.stopPropagation();
        if ($.browser.msie) {
            event.originalEvent.keyCode = 0;
            event.originalEvent.cancelBubble = true;
            event.originalEvent.returnValue = false;
        }
    }

    /* ==============================================
    Section Position
    =============================================== */
    function setSections() {
        var sections = $("section"),
            wWidth = $(window).width(),
            wCounter = 0;
        
        if(wWidth > mobileRes) {  

            $.each(sections, function(eq) {
                if(eq > 0) {
                    $(this).css({'left': wCounter});
                }
                wCounter = wCounter + $(this).width();            
            }); 

        } else {
            $.each(sections, function(eq) {
                $(this).css({'left': 0});          
            }); 
        }     
    }

    function forcePosition() {
        var hash = window.location.hash,
            $panels = $('section'),
            scrollElement = 'html, body',
            $mainNav = $('#main-nav ul li a'),
            found = false;
        $panels.each(function(eq) {
            var panelId = $(this).attr('id');
            if( '#' + panelId == hash ) {
                found = true;
                var wWidth = $(window).width();

                $(scrollElement).stop().animate({
                    scrollLeft: wWidth * eq
                }, 300, 'easeOutCubic');
    
            }
        });

        if(!found) {
            var scroll = $(window).scrollLeft();
            if(scroll != 0) {
               $(scrollElement).stop().animate({
                    scrollLeft: 0
                }, 300, 'easeOutCubic');
            }          
        }
    }

    function resetWindowWidth() {
        wWidth = $(window).width();
    }

    $(window).resize(function() {
        setSections();
        forcePosition();
        resetWindowWidth();
    });

    setSections();

    $(window).on('hashchange', forcePosition);

    /* ==============================================
    Navigation
    =============================================== */
    var noIntro = $('body').hasClass('no-intro');

    function setNavigation() {
        var nav = $('nav#main-nav'),
            wWidth = $(window).width();
            
        if( !noIntro ) {
            if(wWidth > mobileRes) {
                nav.css({'left': wWidth });
            }
        }
        
    }

    setNavigation();

    function adjustNavigation() {
        var nav = $('nav#main-nav'),
            scroll = $(window).scrollLeft(),
            wWidth = $(window).width();

        if( !noIntro ) {
            if(wWidth > mobileRes) {
               if(scroll >= wWidth) {
                    nav.css({
                        'left': 0
                    });
                } else {
                    nav.css({
                        'left': wWidth - scroll
                    });
                } 
            } else {
                nav.css({
                    'left': 0
                });
            }     
        }
        
    }

    $(window).scroll(function() {
        adjustNavigation();
    });

    $(window).resize(function() {
        adjustNavigation();
    });

    /* ==============================================
    Mobile Navigation
    =============================================== */

 
	var menu = $('.navbar-collapse');
	var links = $('.navbar-collapse a');
  
	links.click(function() {  
		menu.removeClass('in');
		menu.addClass('collapse');
	}); 
	
	

  
    /* ==============================================
    Smooth Scrolling
    =============================================== */
    var scrollElement = 'html, body',
        $scrollElement,
        isMoving = false;

    $(function() {

        $('html, body').each(function () {
            if(wWidth > mobileRes) {
                var initScrollLeft = $(this).attr('scrollLeft');
            
                $(this).attr('scrollLeft', initScrollLeft + 1);
                if ($(this).attr('scrollLeft') == initScrollLeft + 1) {
                    scrollElement = this.nodeName.toLowerCase();
                    $(this).attr('scrollLeft', initScrollLeft);
                    return false;
                }
            }
                
        });
        $scrollElement = $(scrollElement);
    });

    $(function() {
        var $sections = $('section.section');  

        $sections.each(function() {
            var $section = $(this);
            var hash = '#' + this.id;

            $('a[href="' + hash + '"]').on('click touchstart', function(event) {
                stopEvent(event);
                isMoving = true;
                if(wWidth > mobileRes) {
                    $scrollElement.stop().animate({
                        scrollLeft: $section.offset().left
                    }, 1200, 'easeOutCubic', function() {
                        window.location.hash = hash;
                        isMoving = false;
                    });
                } else {
                    $scrollElement.stop().animate({
                        scrollTop: $section.offset().top
                    }, 1200, 'easeOutCubic', function() {
                        isMoving = false;
                    });
                }
                $('nav#main-nav a').removeClass('active');
                if($(this).hasClass('content-menu-link')) {
                    var link = $(this).attr('href');
                    $('a[href="' + hash + '"]').addClass('active');
                } else {
                    $(this).addClass('active');
                }

                var trigger = $('#responsive-nav'),
                    menu = $('#main-nav ul'); 

                if(trigger.hasClass('nav-visible')) {
                    menu.slideToggle();
                    trigger.toggleClass('nav-visible');
                }

                event.preventDefault();
            });
        });

    });

    function setInitActiveMenu() {
        var hash = window.location.hash;
        $('a[href="' + hash + '"]').addClass('active');
    }

    setInitActiveMenu();

    /* ==============================================
    Mobile Menu
    =============================================== */
    if ($('.mobile-nav').length && $('.mobile-nav').attr('data-autogenerate') == 'true') {
        var mobileMenu = $('.mobile-nav');
        $('ul.nav li a').each(function(index, elem) {
            mobileMenu.append($('<option></option>').val($(elem).attr('href')).html($(elem).html()));
        });
    }

    $('.mobile-nav').on('change', function() {
        link = $(this).val();
        if (!link) {
            return;
        }

        if (link.substring(0,1) == '#') {
            $('html, body').animate({scrollTop: $(link).offset().top - 74}, 750);
        } else {
            document.location.href = link;
        }
    });



    /* ==============================================
    Input Placeholder for IE
    =============================================== */

    if(!Modernizr.input.placeholder){

        $('[placeholder]').focus(function() {
            var input = $(this);
            if (input.val() == input.attr('placeholder')) {
                input.val('');
                input.removeClass('placeholder');
            }
        }).blur(function() {
            var input = $(this);
            if (input.val() == '' || input.val() == input.attr('placeholder')) {
                input.addClass('placeholder');
                input.val(input.attr('placeholder'));
            }
        }).blur();
        $('[placeholder]').parents('form').submit(function() {
            $(this).find('[placeholder]').each(function() {
                var input = $(this);
                if (input.val() == input.attr('placeholder')) {
                    input.val('');
                }
            });
        });

    }

	
});
function updateVideo(){
		var div3 = $(".youtube-wigu");
		var div4 = $("#youtube-video");				var trailer = $("#doctorlife_trailer");		
		var height2 = $(".container-doctorlife").height();
		var width2 = $(".container-doctorlife").width();
		
		if ($(window).width()< 768){

		div3.css("padding-top", (height2/3557*576));
		div3.css("padding-left", ((width2*0.1495)+15.341));
		div4.css("height", (height2/3557*390));
		div4.css("width", (width2/940*645));						// div5.css("height", "100%");		trailer.css("height", (3/4* $(window).width()));
		
		}else{

		div3.css("padding-top", "");
		div3.css("padding-left","");
		div4.css("height", "");
		div4.css("width", "");		trailer.css("height", "");
		// div5.css("width", "");						
		}
		

}
	$(window).resize(function() {
        if ($(window).width() < 768) {
			
            $('.encyclo').css("padding-top",((1.5433*$(window).width())-475));
        } else{
			$('.encyclo').css("padding-top","");
		}
        //end small-screen
    }) .resize(); // trigger resize event
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
$(window).resize(function() {
	if ($(window).width() < 768) {
		
		$('.encyclo').css("padding-top",((1.5433*$(window).width())-475));
	} else{
		$('.encyclo').css("padding-top","");
	}
	//end small-screen
}) .resize(); // trigger resize event
$(document).ready(function() {
		$(".fancybox").fancybox();
	});
/* Community Tabs */$('#facebookposts a').click(function (e) {  e.preventDefault()  $(this).tab('show')})$('#articlesreviews a').click(function (e) {  e.preventDefault()  $(this).tab('show')})	