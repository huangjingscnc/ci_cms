(function ($) {
    $.fn.accordian = function (options) {
        var
        defaults = {
            speed: 0,
            dontslide: ".dontslide",
            ease: "swing",
            style: "dropdown",
            delay: 1500,
            colwidth: 120
        },
            settings = $.extend({}, defaults, options);
            this.each(function () {
            var $this = $(this);
            var buttons = $this.children("li");
            $('.hasSub').css({
                "cursor": "pointer"
            });
            if (settings.style === "accordian") {
            var hiddenmenus = $(buttons).children("ul");
            $(hiddenmenus).parent("li").addClass("hasSub");
            $(hiddenmenus).addClass('HIDDEN_MENU');
            $(hiddenmenus).not(settings.dontslide).hide();
                $('.hasSub a:first').click(function () {
                    var parent = $(this);
                    var parentclass = $(this).attr("class");
                    var item = $(this).parent("li").children("ul");
                    if ($(this).is(".open")) {
                        $(this).removeClass("open", function () {
                            $(this).children().find('.HIDDEN_MENU').slideUp(settings.speed, settings.ease);
                        });
                    }
                    else {
                        $(".open").removeClass("open");
                        $(this).addClass("open", function () {
                            $(hiddenmenus).not(settings.dontslide).slideUp(settings.speed, settings.ease);
                            $(item).slideDown(settings.speed, settings.ease);
                        });
                    }
                    return false;
                });
            }
            if (settings.style === "dropdown") {
            
            var hiddenmenus = $(buttons).children("ul");

            $(hiddenmenus).parent("li").addClass("hasSub");
            $(hiddenmenus).addClass('HIDDEN_MENU');
            $(hiddenmenus).not(settings.dontslide).hide();
            
            
                $('.hasSub').each(function () {
                    $(this).hover(function () {
                        var parent = $(this);
                        var parentclass = $(this).attr("class");
                        var item = $(this).children("ul");
                        $(parent).addClass("active");
                        $(hiddenmenus).not(settings.dontslide).slideUp(settings.speed, settings.ease);
                        $(item).stop(true, true).delay(10).slideDown(settings.speed, settings.ease);
                    }, function () {
                        $('.HIDDEN_MENU').delay(settings.delay).slideUp(settings.speed, settings.ease);
                        $(".hasSub").removeClass("active");
                    });
                });
            }
            
            if(settings.style === "mega"){
            		var hiddenmenus = $(buttons).children("div");
   		            $(hiddenmenus).parent("li").addClass("hasSub");
		            $(hiddenmenus).addClass('HIDDEN_MENU');
		            $(hiddenmenus).not(settings.dontslide).hide();

            		$('.hasSub').each(function () {
            			$(this).hover(function () {
            			var cols = $(this).children().find("div.mcol");
            			var colwidth = $(cols).width();
            			$(cols).not(":first").css({"border-left": "1px solid #F9AD14", "width": settings.colwidth-1});
            	    	var colcount = $(cols).length;
                    	var mwidth = settings.colwidth*colcount;
                        var parent = $(this);
                        var parentclass = $(this).attr("class");
                        var item = $(this).children("div");
                        
                        $(parent).addClass("active");
                        $(hiddenmenus).not(settings.dontslide).fadeOut(settings.speed, settings.ease);
                        $(item).stop(true, true).width(mwidth).delay(10).fadeIn(settings.speed, settings.ease);
                    }, function () {
                        $('.HIDDEN_MENU').delay(settings.delay).fadeOut(settings.speed, settings.ease);
                        $(".hasSub").removeClass("active");
                    });
                });
                
            
            
            }
        });
        return this;
    };
})(jQuery);