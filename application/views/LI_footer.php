			</div><!-- end container -->
				<div class="push"></div>
</div><!-- end main wrapper -->

<div class="footer">
<div class="center_column">   
    
    
</div>    

			<!--
<script type="text/javascript">
			if (typeof jQuery == 'undefined')
			{
			document.write(unescape("%3Cscript src='<?php echo base_url(); ?>js/jquery-1.4.2.min.js' type='text/javascript'%3E%3C/script%3E"));
			}
			</script>
-->
			<script type="text/javascript" src="<?php echo base_url(); ?>js/andyModal.js"></script>
			<script type="text/javascript" src="<?php echo base_url(); ?>js/accordian-0.1.js"></script>
			<script type="text/javascript" src="<?php echo base_url(); ?>js/tiny_mce/jquery.tinymce.js"></script>
			<script type="text/javascript">
			$(function() {
			$('textarea.editor').tinymce({
			// Location of TinyMCE script
			script_url : '<?php echo base_url(); ?>js/tiny_mce/tiny_mce.js',

			// General options
			theme : "advanced",
			plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

			// Theme options
			theme_advanced_buttons1 : "bold,italic,underline,strikethrough,styleselect,formatselect,bullist,numlist,link,unlink,anchor,image,cleanup,help,code",
			
			theme_advanced_buttons2 : "tablecontrols,|,hr,removeformat,|,sub,sup,|,charmap,iespell,media",
			theme_advanced_buttons3 : "cite,abbr,acronym,del,ins,|,nonbreaking",
			theme_advanced_toolbar_location : "top",
			theme_advanced_toolbar_align : "left",
			theme_advanced_statusbar_location : "bottom",
			theme_advanced_resizing : true,

			// Example content CSS (should be your site CSS)
			content_css : "<?php echo base_url(); ?>styles/editor_styles.css",

			// Drop lists for link/image/media/template dialogs
			template_external_list_url : "<?php echo base_url(); ?>lists/template_list.js",
			external_link_list_url : "<?php echo base_url(); ?>lists/link_list.js",
			external_image_list_url : "<?php echo base_url(); ?>lists/image_list.js",
			media_external_list_url : "<?php echo base_url(); ?>lists/media_list.js",
			file_browser_callback : "tinyBrowser",
			relative_urls : false,
			remove_script_host : false,
			document_base_url : "<?php echo base_url(); ?>"
			//document_base_url : "<?php echo base_url(); ?>page/"

				});
			});
			</script>
			
			<script type="text/javascript" src="<?php echo base_url(); ?>js/tiny_mce/plugins/tinybrowser/tb_tinymce.js.php"></script>
			<script type="text/javascript" src="<?php echo base_url(); ?>js/tiny_mce/plugins/tinybrowser/tb_standalone.js.php"></script>
			
			

<script>
$(document).ready(function() {
		
$('#cal_form').live('submit', function(){
var day_num = $(this).children("input[name=day]").val();
var day_data = $(this).children("input[name=data]").val();
var str = $('th.heading').text();
var cal = str.split('2');
var month = $.trim(cal[0]);
var year = "2"+cal[1];
var cal_class = $('#cal_class').val();

switch(month)
{
case "January":
  var monthno = '01';
  break;
case "February":
  var monthno = '02';
  break;
case "March":
  var monthno = '03';
  break;
case "April":
  var monthno = '04';
  break;
case "May":
  var monthno = '05';
  break;
case "June":
  var monthno = '06';
  break;
case "July":
  var monthno = '07';
  break;
case "August":
  var monthno = '08';
  break;
case "September":
  var monthno = '09';
  break;
case "October":
  var monthno = '10';
  break;
case "November":
  var monthno = '11';
  break;
case "December":
  var monthno = '12';
  break;
default:
alert("This is not a valid month. Please contact the website owner with details of this site error.\n MONTH: "+month);
}		
		
		
		
		$.post('<?php echo base_url(); ?>site/cal_modal_form',{'day': day_num, 'data': day_data, 'month': monthno, 'year': year, 'cal_class': cal_class}, function(data){
		location.reload();
		});
			return false;
	});
	
	$("div.content").each(function(){
	    var $this = $(this);
		var str = $('th.heading').text();
		var cal = str.split('2');
		var month = $.trim(cal[0]);
		var year = "2"+cal[1];
		var day = $(this).siblings('.day_num').text();
		switch(month)
{
case "January":
  var monthno = '01';
  break;
case "February":	
  var monthno = '02';
  break;
case "March":
  var monthno = '03';
  break;
case "April":
  var monthno = '04';
  break;
case "May":
  var monthno = '05';
  break;
case "June":
  var monthno = '06';
  break;
case "July":
  var monthno = '07';
  break;
case "August":
  var monthno = '08';
  break;
case "September":
  var monthno = '09';
  break;
case "October":
  var monthno = '10';
  break;
case "November":
  var monthno = '11';
  break;
case "December":
  var monthno = '12';
  break;
default:
alert("This is not a valid month. Please contact the website owner with details of this site error.\n MONTH: "+month);
}	
		$.post('<?php echo base_url(); ?>site/get_calendar_class',{'year':year, 'month': monthno, 'day': day},function(theclass){
		$this.addClass(theclass);
		});
	
	});

$.fn.clearForm = function() {
  return this.each(function() {
 var type = this.type, tag = this.tagName.toLowerCase();
 if (tag == 'form')
   return $(':input',this).clearForm();
 if (type == 'text' || type == 'password' || tag == 'textarea')
   this.value = '';
 else if (type == 'checkbox' || type == 'radio')
   this.checked = false;
 else if (tag == 'select')
   this.selectedIndex = -1;
  });
};

$(".calendar .highlight").parent("td").addClass("today");
$(".calendar .content").each(function(){
var txt = $(this).text();
var $this = $(this);

/*
if(txt == "booked" || txt =="Booked"){
$this.addClass("booked");
} else if(txt == "empty" || txt == "Empty"){
$this.addClass("empty");
}else if(txt == "partial" || txt == "Partial"){
$this.addClass("partial");
}
*/
	
});


  
  
$("#edit_product_form").live('submit', function(){
	var data = $(this).serialize();
	$.post("<?php echo base_url(); ?>site/update_product", data, function(){
		$.post("<?php echo base_url(); ?>site/get_updated_product",data, function(data){
				$('#edit_prod').fadeOut(function(){
				$('#edit_prod').html(data);
				$('textarea.editor').tinymce({
			// Location of TinyMCE script
			script_url : '<?php echo base_url(); ?>js/tiny_mce/tiny_mce.js'
			});


				});

			 	 $('#edit_prod').fadeIn();
			  });
	})
return false;
});

$("#metastuff").slideUp();
$("#meta_title .button").hover(function(){
	$(this).css({"cursor":"pointer"});
});
		$("#meta_title .button").click(function(){
			$("#metastuff").slideToggle();

		});
		
		
$('.products_table').live('submit', function(){
//alert("submitted");
		var info = $(this).serialize();
		var action = $('input[name=action]:checked').val();
		var product_ID = $(this).children("input[name='product_ID']").val();
		var $form = $(this);

	$.post("<?php echo base_url(); ?>site/product_form",info, function(data){
	
	//alert("post complete");
		if(action == "edit"){
			  $('#edit_prod').html(data);
			  if($('#sizes').attr("checked")){
			  		$("#size_options").show();
			  		}else{
			  		$("#size_options").hide();
			  		}
			  	if($('#showcolours').attr("checked")){
			  		$("#colour_options").show();
			  		}else{
			  		$("#colour_options").hide();
			  		}
			  $('#edit_prod').fadeIn();
			  $('.product_ID').val(product_ID);
			  $('textarea.editor').tinymce({
			// Location of TinyMCE script
			script_url : '<?php echo base_url(); ?>js/tiny_mce/tiny_mce.js'
			});
		$('.row form').clearForm();
		}
		
		else if(action == "delete"){
		$.post('<?php echo base_url(); ?>site/get_prod_table', function(data) {
	  		$('#products .tbody').html(data);
	  		$('#products .row:even').addClass("even");

			});

		}
		
		else if(action == "enable"){
		
			$.post('<?php echo base_url(); ?>site/get_prod_table', function(data) {
	  		$('#products .tbody').html(data);
	  		$('#products .row:even').addClass("even");

			});
		}
		
		else if(action == "disable"){
			$.post('<?php echo base_url(); ?>site/get_prod_table', function(data) {
	  		$('#products .tbody').html(data);
			$('#products .row:even').addClass("even");
			});
			
		}
		else{
			alert ("Please Select one action");
		}
			$('#products .row:even').addClass("even");

	});
	return false;
});

$('#products .row:even').addClass("even");




$('#galleries form').live('submit', function(){
		var info = $(this).serialize();
		var action = $('input[name=action]:checked').val();
		var this_pageID = $('input[name=this_pageID]').val();
		var gallery_ID = $(this).children("input[name='gallery_ID']").val();

	$.post("<?php echo base_url(); ?>gallery_controller/gallery_form_one",info, function(data){
		if(action == "edit"){
	
			  $('#edit_existing .current_gallery').html(data);
			  $('#edit_existing').fadeIn();
			  $('.gallery_ID').val(gallery_ID);
		}
		
		else if(action == "delete"){
		$.post('<?php echo base_url(); ?>gallery_controller/deliver_table',{'pageID':this_pageID}, function(data) {
	  		$('#galleries .tbody').html(data);
	  		$('#galleries .row:even').addClass("even");
			});

		}
		
		else if(action == "add_to_page"){
		
			$.post('<?php echo base_url(); ?>gallery_controller/deliver_table',{'pageID':this_pageID}, function(data) {
	  		$('#galleries .tbody').html(data);
	  		$('#galleries .row:even').addClass("even");
			});
		}
		
		else   if(action == "remove_from_page"){
				//alert('herhe');

			$.post('<?php echo base_url(); ?>gallery_controller/deliver_table',{'pageID':this_pageID}, function(data) {
	  		$('#galleries .tbody').html(data);
	  		$('#galleries .row:even').addClass("even");
		alert('herhe');

			});
			
		}
		else{
			alert ("Please Select one action");
		}
			$('#galleries .row:even').addClass("even");

	});
	return false;
});



//edit the details for this image
$(".edit_gallery_image").live('submit',function(){
var info = $(this).serialize();
var galID = $(this).children("input[name='gallery_ID']").val();
var parent_pageID = $(this).children("input[name='parent_pageID']").val();
$.post("<?php echo base_url(); ?>gallery_controller/edit_image",info, function(data){
	$.post('<?php echo base_url(); ?>gallery_controller/deliver_gallery',{'galID':galID, 'parent_pageID':parent_pageID}, function(data) {
  $('#edit_existing .current_gallery').html(data);
});
});
return false;
});



$("#add_image").live('submit', function(){
var info = $(this).serialize();

var galID = $(this).children("input[name='gallery_ID']").val();
var parent_pageID = $(this).children("input[name='parent_pageID']").val();
$.post("<?php echo base_url(); ?>gallery_controller/add_image",info,function(data){//add the image to the db
	
	//then ask the db for the full list again
	$.post('<?php echo base_url(); ?>gallery_controller/deliver_gallery',{'galID':galID}, function(data) {
  $('#edit_existing .current_gallery').html(data);
});

$("#add_image input[type='text']").val("");//clear the form
})
return false;
});



$("#edit_existing").hide();

$("#choose_gall").change(function(){
var galID = $(this).val();
var parent_pageID = $("input[name='parent_pageID']").val();
$.post('<?php echo base_url(); ?>gallery_controller/deliver_gallery',{'galID':galID, 'parent_pageID':parent_pageID}, function(data) {
  $('#edit_existing .current_gallery').html(data);
  $("#edit_existing").fadeIn(function(){
  var gallery_id = $("#edit_existing input[name='gallery_ID']").val();
  if(gallery_id ==""){
  var gallery_id = "1";
  }
  $(".gallery_ID").val(galID);
  $.post('<?php echo base_url(); ?>gallery_controller/deliver_gallery',{'galID':gallery_id, 'parent_pageID':parent_pageID}, function(data) {
  $('#edit_existing .current_gallery').html(data);
});
  
  });
});

});

$("#main_image").live('click', function(){
					tinyBrowserPopUp('main_image','main_image');
					return false;
				});
				
				


$("form a#g_switch").live('click', function(){
					tinyBrowserPopUp('image','image');
					return false;
				});
				
$("form #image").live('click',function(){
	tinyBrowserPopUp('image','image');
	return false;
});


$("form a#new_g_switch").live('click', function(){
					tinyBrowserPopUp('new_image','new_image');
					return false;
				});
				
$("form #new_image").live('click',function(){
	tinyBrowserPopUp('new_image','new_image');
	return false;
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
		
				if(val == "child"){
					$("#choose_page").fadeIn()
				}else{
					$("#choose_page").fadeOut();
				}
		});
		
		
		if($("select[name='page_type'] option:selected").val() != "child"){
		$("#choose_page").fadeOut()
		}else{
		$("#choose_page").fadeIn('slow');
		}
		
		
		
		
		$('#galleries .row:even').addClass("even");
		$('#sizes').live('click', function(){
			$('#size_options').slideToggle();
		});	
		$('#showcolours').live('click', function(){
			$('#colour_options').slideToggle();
		});
		
		$('#update_name').live('submit', function(){
		var page_ID = $('input[name=page_ID]').val();
		var data = $(this).serialize();
		$.post('<?php echo base_url(); ?>gallery_controller/update_name', data, function(){
			$.post('<?php echo base_url(); ?>gallery_controller/deliver_table',{'pageID':page_ID}, function(data) {
	  		$('#galleries .tbody').html(data);
	  		$('#galleries .row:even').addClass("even");
			});

		});
		return false;
		});
		
		$('.details').hide();
		
		$(".order_header ").click(function(){
			$(this).next().slideToggle();
		});
		$("#galleries .row:last, #products .row:last, ").addClass("last");
		


$.post("<?php echo base_url(); ?>page/get_orders", {request: "viewcount"}, function(data){
var obj = $.parseJSON(data);
if(obj.unread > 0){
		$("#view_orders").append("<span id='unread_messages'>"+obj.unread+"</span>");
		$("#topmessage").text(obj.unread);
		if(obj.unread == 1){
			$("#plural").hide();
		}
		}else{
			$(".welcome_message p").hide();
		}
 });


$('.tabs > div').hide();
$('.tabs > div:first').show();
$('.tabs > ul li:first').addClass('current');
$('.tabs > ul li a').click(function(){
	var href = $(this).attr('href');
	$('.tabs > div').hide();
	$('.tabs > ul li').removeClass('current');
	$(this).parent().addClass('current');
	
	$('.tabs > div').each(function(){
		if($(this).attr('id') == href){
	$(this).show();
	}
	});
	return false;
});

$('textarea.meditor').tinymce({
			// Location of TinyMCE script
			script_url : '<?php echo base_url(); ?>js/tiny_mce/tiny_mce.js'
			});
			
$("ul.pages_list").accordian({
"style":"dropdown",
speed: 200,
delay: 50
});





$('.calendar .day').live('click', function(){
	var day_num = $(this).find('.day_num').html();
	var cal_class = $(this).find('.content').attr('class');
	if(cal_class !=null){
	var cal_class = cal_class.split(" ");
	var cal_class = cal_class[1];
	}
	
	var content = $(this).find('.content');
	if(content.length > 0){
		var day_data = $(this).find('.content').html();

	}else{
	var day_data = "";
	}
		
	var str = $('th.heading').text();
	var cal = str.split('2');
		//alert(cal[0]);
		//alert(cal[1]);
	if(day_data == 'null'){
	day_data == '';
	}
	var popup = "<div class='mod_bg'></div><div class='modal'><div id='mod_clse' class='md_clse'>X</div><form id='cal_form' action='<?php echo base_url();?>Site/availability'><input type='hidden' value='"+day_num+"' name='day'/><p>Please enter your data for this date("+day_num+")</p><input type='text' name='data' value='"+day_data+"'/><p><label>Assign a Colour: </label><select name='cal_class' id='cal_class'><option value='partial'>Partial</option><option value='full'>Full</option><option value='available'>Available</option><option value='comment'>Comment</option></select></p><input type='submit' value='update'/></form></div>";
	

	$('body').append(popup);
$("#cal_class option").each(function(){
	
		if($(this).val() == cal_class){
		$(this).attr('selected',':selected');
		}
	});

	$('.mod_bg').animate({opacity: 0.5}, 'slow');
	return false;
	});
	
	$("#mod_clse").live("click", popout, 100);	
	$(".mod_bg").live("click", popout, 100);
	
	function popout (){
		$('.mod_bg').animate({opacity: 0}, '100')
		$('.modal').animate({opacity: 0}, '100', function(){
			$('.mod_bg').remove();
		})
	};
	
	


$(".pages_list").sortable({
	update: function(){
var myarr = $(".pages_list").sortable('serialize');
$.post("<?php echo base_url(); ?>site/sort_order", myarr)
	}
}); 

$(".HIDDEN_MENU").sortable({
	update: function(){
var myarr = $(".HIDDEN_MENU").sortable('serialize');
$.post("<?php echo base_url(); ?>site/sort_order", myarr)
	}
}); 





/* _______________________________ */

function popout (){
		$('.mod_bg').animate({opacity: 0}, '100');
		$('.modal').animate({opacity: 0}, '100', function(){
			$('.mod_bg').remove();
		});
	}
	
	
	$('a.screen_name').live('click', function(){
	var sn = $(this).text();
	var snl = 140 - sn.length;
	var popup = "<div class='mod_bg'></div><div class='modal twitter'><div id='mod_clse' class='md_clse'>X</div><form id='tweetreply_form' action='<?php echo base_url();?>site/tweet_reply'><textarea id='pop_ta' cols='60'>"+sn+"</textarea><div id='crem2'>"+snl+"</div><input type='submit' value='Tweet back'/></form></div>";
	

	$('body').append(popup);



	$('.mod_bg').animate({opacity: 0.5}, 'slow');
	return false;
	});
	
	$("#tweetreply_form").live('submit', function(e){
	
	var tweetreply = $("#pop_ta").val();
	$.post('<?php echo base_url(); ?>site/tweet_reply',{pop_ta: tweetreply}, function(data){
		location.reload();
		
		});
		e.preventDefault();
		
		});
	
	$("#mod_clse").live("click", popout, 100);	
	$(".mod_bg").live("click", popout, 100);
	
	

	
$("#pop_ta").live('keydown', function(){
var len = this.value.length;
if (len >= 140) {
                    this.value = this.value.substring(0, 140);
                }
	$("#crem2").text(140-len);
});
	
	
	

}); //end doc ready
</script>
</div>


</body>
</html>