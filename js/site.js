$(document).ready(function() { 

function get_location() { navigator.geolocation.getCurrentPosition(show_map); }	
	
$("input[name=username]").each(function(){
	var preval = $(this).val();
	var	$this = $(this);
	
	$this.focus(function(){
	$this.val(null);
	//alert($this.val())
	});	
	$this.blur(function(){
		if($this.val() == ''|| $this.val() == null){
			$this.val(preval);
		}
	
	});
});

$("tr:even").addClass("even");
$("tr td:last-child").addClass("last");


			$(".gall_pic a").lightBox();
				$('.product_image_frame a').lightBox();



$(".shs").hide();
	$('#galleries h2').click(function(){
		$(this).next().slideToggle();
	});
	

   
   
   $(".slider1Image img").load(function(){
			var placedheight = $(this).height();
			var placedwidth = $(this).width();
			if (placedheight < placedwidth){ // if landscape
				
				if(placedheight < (placedwidth/1.97)){ // if  too high
					$(this).css({"height": "456px"});
				}
				else
				{
					
					$(this).css({"width": "900px"});
					var top_margin = parseInt($(this).attr("height")/4);
					$(this).css({"margin-top": "-"+top_margin+"px"});

				}

			}
			else
			{
			
			$(this).css({"width": "900px"})
			if($(this).height() > 456){
					var top_margin = parseInt($(this).attr("height")/4);
					$(this).css({"margin-top": "-"+top_margin+"px"});
					}

			}		
			});


$("#nav").accordian({
"style":"dropdown",
"speed": 200,
"delay": 50
});

$("div.content img").each(function(){
var float = $(this).css("float");
if(float == 'left'){
	var margin = "0 10px 0 0";
}
if(float == 'right'){
	var margin = "0 0 0 10px";
}
$(this).wrap("<div class='img_box' style='float:"+ float +"; margin: " + margin + "'/>");

});



		$("#choose_page").hide()
		
		$("select[name='page_type']").change(function(){
		var val = $("select[name='page_type'] option:selected").val();

		alert(val);
		if(val != "false"){
		$("#choose_page").fadeOut()
		}else{
		$("#choose_page").fadeIn('slow');
		}
		});
		
		
}); //end doc ready