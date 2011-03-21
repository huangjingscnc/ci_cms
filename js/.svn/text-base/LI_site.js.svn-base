$(document).ready(function() {

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

if(txt == "booked" || txt =="Booked"){
$this.addClass("booked");
} else if(txt == "empty" || txt == "Empty"){
$this.addClass("empty");
}else if(txt == "partial" || txt == "Partial"){
$this.addClass("partial");
}
	
});
$("#edit_product_form").live('submit', function(){
	var data = $(this).serialize();
	$.post("http://space-dog.homedns.org/oxfordshire/index.php/site/update_product", data, function(){
		$.post("http://space-dog.homedns.org/oxfordshire/index.php/site/get_updated_product",data, function(data){
				$('#edit_prod').fadeOut(function(){
				$('#edit_prod').html(data);
				$('textarea.editor').tinymce({
			// Location of TinyMCE script
			script_url : 'http://space-dog.homedns.org/oxfordshire/js/tiny_mce/tiny_mce.js'
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

	$.post("http://space-dog.homedns.org/oxfordshire/index.php/site/product_form",info, function(data){
	
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
			script_url : 'http://space-dog.homedns.org/oxfordshire/js/tiny_mce/tiny_mce.js'
			});
		$('.row form').clearForm();
		}
		
		else if(action == "delete"){
		$.post('http://space-dog.homedns.org/oxfordshire/index.php/site/get_prod_table', function(data) {
	  		$('#products .tbody').html(data);
	  		$('#products .row:even').addClass("even");

			});

		}
		
		else if(action == "enable"){
		
			$.post('http://space-dog.homedns.org/oxfordshire/index.php/site/get_prod_table', function(data) {
	  		$('#products .tbody').html(data);
	  		$('#products .row:even').addClass("even");

			});
		}
		
		else if(action == "disable"){
			$.post('http://space-dog.homedns.org/oxfordshire/index.php/site/get_prod_table', function(data) {
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

	$.post("http://space-dog.homedns.org/oxfordshire/index.php/Gallery_controller/gallery_form_one",info, function(data){
		if(action == "edit"){
			  $('#edit_existing .current_gallery').html(data);
			  $('#edit_existing').fadeIn();
			  $('.gallery_ID').val(gallery_ID);
		}
		
		else if(action == "delete"){
		$.post('http://space-dog.homedns.org/oxfordshire/index.php/Gallery_controller/deliver_table',{'pageID':this_pageID}, function(data) {
	  		$('#galleries .tbody').html(data);
	  		$('#galleries .row:even').addClass("even");
			});

		}
		
		else if(action == "add_to_page"){
		
			$.post('http://space-dog.homedns.org/oxfordshire/index.php/Gallery_controller/deliver_table',{'pageID':this_pageID}, function(data) {
	  		$('#galleries .tbody').html(data);
	  		$('#galleries .row:even').addClass("even");
			});
		}
		
		else   if(action == "remove_from_page"){
			$.post('http://space-dog.homedns.org/oxfordshire/index.php/Gallery_controller/deliver_table',{'pageID':this_pageID}, function(data) {
	  		$('#galleries .tbody').html(data);
	  		$('#galleries .row:even').addClass("even");

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
$.post("http://space-dog.homedns.org/oxfordshire/index.php/Gallery_controller/edit_image",info, function(data){
	$.post('http://space-dog.homedns.org/oxfordshire/index.php/Gallery_controller/deliver_gallery',{'galID':galID, 'parent_pageID':parent_pageID}, function(data) {
  $('#edit_existing .current_gallery').html(data);
});
});
return false;
});



$("#add_image").live('submit', function(){
var info = $(this).serialize();

var galID = $(this).children("input[name='gallery_ID']").val();
var parent_pageID = $(this).children("input[name='parent_pageID']").val();
$.post("http://space-dog.homedns.org/oxfordshire/index.php/Gallery_controller/add_image",info,function(data){//add the image to the db
	
	//then ask the db for the full list again
	$.post('http://space-dog.homedns.org/oxfordshire/index.php/Gallery_controller/deliver_gallery',{'galID':galID}, function(data) {
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
$.post('http://space-dog.homedns.org/oxfordshire/index.php/Gallery_controller/deliver_gallery',{'galID':galID, 'parent_pageID':parent_pageID}, function(data) {
  $('#edit_existing .current_gallery').html(data);
  $("#edit_existing").fadeIn(function(){
  var gallery_id = $("#edit_existing input[name='gallery_ID']").val();
  if(gallery_id ==""){
  var gallery_id = "1";
  }
  $(".gallery_ID").val(galID);
  $.post('http://space-dog.homedns.org/oxfordshire/index.php/Gallery_controller/deliver_gallery',{'galID':gallery_id, 'parent_pageID':parent_pageID}, function(data) {
  $('#edit_existing .current_gallery').html(data);
});
  
  });
});

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

		if(val != "FALSE2"){
		$("#choose_page").fadeOut()
		}else{
		$("#choose_page").fadeIn('slow');
		}
		});
		
		
		if($("select[name='page_type'] option:selected").val() != "FALSE2"){
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
		$.post('http://space-dog.homedns.org/oxfordshire/gallery_controller/update_name', data, function(){
			$.post('http://space-dog.homedns.org/oxfordshire/index.php/Gallery_controller/deliver_table',{'pageID':page_ID}, function(data) {
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
		$("#galleries .row:last").addClass("last");
}); //end doc ready