(function($){
	$.fn.andyModal = function(options) {
		
		var
		  defaults = {
		  	overlay: "#000000",
		  	close: "Close X",
		  	width: "300",
		  	opacity: 0.7,
		  	fadetimeIn: 2000,
		  	fadetimeOut: 500,
		  	topHeading:"h2",
		  	maxheight: "50%",
		  	defaulttitle:"Message"
		  },
		  settings = $.extend({}, defaults, options);
		  
		  this.each(function() {
		  	var $this = $(this);
		  	
		  	var Amodal = $("<div id='bg' style=''></div><div class='result'><div id='modalTop'><div id='close'>"+settings.close+"</div></div><div id='modcontent'></div></div>");
		  	var dheight = $(document).height();
		  	var dwidth = $(document).width();
		  	var dzindex = "1000";
		  	
		  	
		  	if ($this.is("a")){
		  			  	var modtarget= $this.attr("href");
		  			  	$this.click(function(){
		  			  	$("body").append(Amodal);
						$("#bg").css({"height":dheight, "width": dwidth, "background-color": settings.overlay, "position": "absolute", "top": "0", "left": 0, "z-index": dzindex, zoom:1});
						$(".result").css({
							"z-index": 1001,
							"opacity":0,
							"width": settings.width + "px",
							"max-height": settings.maxheight,
							"overflow": "auto"
							});
						$(".result #modcontent").load(modtarget, resetMargin);
						$("#bg").animate({"opacity": settings.opacity}, settings.fadetimeIn);
						return false;
		  	});	  	

		  	}
		  	else if ($this.is("form")){
		  		var modtarget= $this.attr("action");
		  		$this.submit(function(){
		  		
		  		$.post(modtarget, 
			  		$this.serialize(), function (data){ 
			  		$('body').append(Amodal);			  		
			  		$("#bg").css({"height":dheight, "width": dwidth, "background-color": settings.overlay, "position": "absolute", "top": "0", "left": 0, "z-index": dzindex, zoom:1});
					$(".result").css({"z-index": dzindex + 1, "opacity":0, "width": settings.width + "px"});
						$(".result #modcontent").html(data);
						 resetMargin();
						$("#bg").animate({"opacity": settings.opacity}, settings.fadetimeIn);
		
			  		});return false;
			  		}); 

		  	}
		  	$("#modcontent form").live("submit", submitModalForm);
		  	
		  	
		  	
			$("#bg").live("click", removepop, 100);
			$("#close").live("click", removepop);
			$(".AMClose").live("click", removepop);
			
			function removepop(){
					$(Amodal).animate({"opacity": 0}, settings.fadetimeIn, 
						function(){
							$("#modalTop h2").text("");
							$("#modalTop h2").remove();
							$(Amodal).remove();

							var mleft = null;
							});
						}
			function moveHeading(){
			var oldTitle = $("#modcontent "+settings.topHeading+":first");
			if($(oldTitle).html()== null){
			oldTitleH = settings.defaulttitle;
			}else{
			var oldTitleH = $(oldTitle).html();
			}
			$(oldTitle).remove();
			$("#close").before("<"+ settings.topHeading +">"+oldTitleH+"</"+settings.topHeading+">");
			var oldTitleH = "";


		  	}

						
						
			function resetMargin(){
				$(".result").css({"margin-top": "auto"});
				moveHeading()
				var mTop = ($(".result").outerHeight(true))/2;
				var mleft = (parseInt($(".result").css("padding-left")) + parseInt($(".result").css("padding-right")) + parseInt($(".result").css("width")))/2;
				var contenttHeight= parseInt($(".result").innerHeight());
				var contentPadding = parseInt($(".result").css("padding-top")) + parseInt($(".result").css("padding-bottom"));
				var mtHeight = parseInt($("#modalTop").outerHeight(true));
				$("#modcontent").css({"max-height":contenttHeight-contentPadding-mtHeight})

				$(".result").css({
				"margin-left": "-"+mleft+"px",
				"margin-top": "-"+mTop+"px",
				"opacity": 1
				});

			};

			function submitModalForm(){
			$("#modalTop h2").remove();

			var $thisform = $(this);
			var modtarget= $thisform.attr("action");
			$.post(modtarget, $thisform.serialize(), function (data){
						$(".result").fadeOut(250, function(){
						$(".result #modcontent").html(data, function(){
						$("#bg").css({'height':dheight, 'width': dwidth, 'background-color': settings.overlay, 'position': 'absolute', 'top': '0', 'z-index': dzindex});
					$(".result").css({"z-index": dzindex + 1, "opacity":0, "width": settings.width + "px"});
						});
						resetMargin();
						});					  		
						
						$(".result").fadeIn();					  		

			  		});
			  		
		  	return false;
		  	}
			
		  });return this;
	}
})(jQuery);
