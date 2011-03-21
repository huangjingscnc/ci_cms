
<div class = "center_column">
<h1>Edit Page</h1>

		<?php foreach($query2 as $row):?>
		<?php
		$id = $row->ID;
		if ($id == '1'){?>
			<div id ="sliders">
			<div class='tabs'>
			<h3>Edit Front page 'Slider' images.</h3>
			<?php
				$slider_query = $this->Li_pagemodel->get_all_sliders();?>
				<ul class="tabNavigation">
					<?php foreach($slider_query as $srow):
					echo "<li><a href='#tab$srow->slider_ID'>Image $srow->slider_ID</a>";
					endforeach;
					?>
				</ul>
				
				
				<?php foreach($slider_query as $srow):
				echo "<div class='tab_content' id='#tab$srow->slider_ID'>";
				echo "<form action='".base_url()."site/slider' method='post'>";
				echo "<div class='left'>";
				echo "<input type='hidden' value='$srow->slider_ID' name='slider_ID' />";
									
				echo "<label>Image:</label><br/><input type='text' id='slider_image_name$srow->slider_ID' class='slider_image_name' value='$srow->image_name' name='image_name' /><br/>";
				echo "<label>Title: </label><br/><input type='text' value='$srow->info_title' name='info_title' /><br/>";
				$panel_options = array('top'=>'top',
				'right'=>'right',
				'bottom'=>'bottom',
				'left'=>'left'
				);
				echo "<label>Panel position: </label>";
				echo form_dropdown('panel_position', $panel_options, $srow->panel_position);
				echo "</div><div class='right'>";
				echo "<label>Info;</label><br/><textarea name='info_copy' class='meditor'>$srow->info_copy</textarea> <br/>";
				echo "</div>";
				echo "<input type='submit' value='Update Image' class='button'/><br/><br/>";
				echo "</form>";
				echo "</div>";?>
				<script type="text/javascript">
				$(document).ready(function() { 
				$("#slider_image_name<?php echo $srow->slider_ID; ?>").live('click', function(){
					tinyBrowserPopUp('image','slider_image_name<?php echo $srow->slider_ID; ?>');
					return false;
				});
 
				}); 
				</script>
				<?php endforeach;
				?>

				</div>
				
			</div>
		<?php };?>
		<div class="clear"></div>
		<h2>Contents</h2>
		
		<?php echo form_open('site/updater'); ?>




		<!-- <pre> -->
		<?php //print_r($row); ?>
		<!-- </pre> -->
		<?php $pageID = $row->ID;
		//echo "<h2>$id;<h2>";
				if($id != '1'){
					echo "<p class='left_col'>";
					echo "<span><b>Choose the main image for this page</b></span><br />";
					echo "This image <em>MUST</em> have a <b>width of 900 pixels and a height of 456px.</b>";
					echo form_label('Main image: ');
					echo form_input('main_image', $row->main_image, 'id="main_image"');
					echo "</p><p class='right_col'>";
					echo "<img id='main_image_form' width='215' src='".base_url()."$row->main_image' alt=''/>";
					echo "</p>";
					}

		?>

		<div class="clear"></div>
		<?php $up_options = array('TRUE'=> 'TRUE','FALSE' =>'FALSE'); ?>
		<?php $up_selected = $row->user_page ?>
		
		<?php $al_options = array('1'=> 'Super Admin', '2' =>'Admin', '3' =>'Editor'); ?>
		<?php $al_selected = $row->accesslevel ?>
		
		<?php echo form_hidden('ID', $row->ID); ?>
		<p class="left_col">
		<?php echo form_label('Title: ');?>
		
		<?php 
		switch($row->ID)
		{
		case "6":
  		echo form_input('title', $row->title, 'disabled'); 
  		echo form_hidden('title', $row->title);
  		break;
  		case "26":
  		echo form_input('title', $row->title, 'disabled'); 
  		echo form_hidden('title', $row->title);
  		break;
		case "24":
  		echo form_input('title', $row->title, 'disabled'); 
  		echo form_hidden('title', $row->title);
  		break;
		case "7":
  		echo form_input('title', $row->title, 'disabled'); 
  		echo form_hidden('title', $row->title);
  		break; 
  		/*
case "1":
  		echo form_input('', $row->menu_title, 'disabled'); 
  		echo form_hidden('menu_title', $row->menu_title);
  		break;  		
*/
  		default:
  		echo form_input('title', $row->title); 

		}
		
		?>
		
		
		
		<?php //echo form_input('title', $row->title); ?>
		</p>
		
		<p class="right_col">
		<?php echo form_label('Menu title: ');?>
		
		<?php 
		switch($row->ID)
		{
		case "6":
  		echo form_input('', $row->menu_title, 'disabled'); 
  		echo form_hidden('menu_title', $row->menu_title);
  		break;
  		case "26":
  		echo form_input('', $row->menu_title, 'disabled'); 
  		echo form_hidden('menu_title', $row->menu_title);
  		break;
		case "24":
  		echo form_input('', $row->menu_title, 'disabled'); 
  		echo form_hidden('menu_title', $row->menu_title);
  		break;
		case "7":
  		echo form_input('', $row->menu_title, 'disabled'); 
  		echo form_hidden('menu_title', $row->menu_title);
  		break; 
  		/*
case "1":
  		echo form_input('', $row->menu_title, 'disabled'); 
  		echo form_hidden('menu_title', $row->menu_title);
  		break;  		
*/
  		default:
  		echo form_input('menu_title', $row->menu_title); 

		}
		
		?>
		</p>
		
		<p>
		<?php $ta_options = array('class'=> 'editor', 'cols' =>'70', 'rows'=>'15', 'name' => 'content'); ?>

		<?php echo form_label('Content: ');?>
		<?php echo form_textarea($ta_options, $row->content); ?>
		</p>
		
		<!-- <p> -->
		<?php //echo form_label('User Page: ');?>		
		<?php //echo form_dropdown('user_page', $up_options, $up_selected); ?>
		<!-- </p> -->
		
		<p class="left_col">
		<?php echo form_label('Access level: ');?>
		<?php echo form_dropdown('accesslevel', $al_options, $al_selected); ?>
		</p>
		
		<p class="right_col">
		<?php echo form_label('Delete: ');?>
		<?php echo form_checkbox('delete', 'TRUE'); ?>
		</p>
		
		
		
		<?php $page_type_options = array('neutral' => 'neutral', 'parent' => 'parent', 'child' => 'child'); ?>
		<?php $page_type_selected = $row->has_sub_menu; ?>
		<p class="left_col">
		<?php echo form_label('Page Type: ');?>
		<?php echo form_dropdown('page_type', $page_type_options, $page_type_selected); ?>
		</p>
		<script type="text/javascript">
		</script>		
		
		<p id="choose_page" class="right_col">
		<?php echo form_label('Parent: ');?>
		
		<select name="parent">
			
			<option value="<?php if(isset($row->parent)){echo $row->parent;} ?>">Select a Parent Page</option>

			<?php foreach($query as $sel):?>
			<option value='<?php echo $sel->ID."'";
			if($sel->ID == $row->parent){echo "selected=''";} 
			echo $sel->ID?>><?php echo $sel->menu_title; ?></option>
			<?php endforeach; ?>
		</select>
		</p>
		
		<p>
			<?php
				echo form_label('Do you wish to show this page in the menu?');
				if($row->show_hide == 1){
				$showing = "<b>showing</b>";
				$checked = "checked='checked'";
				}else{
				$showing = "<b>hidden</b>";
				$checked = "";

				}
				echo "(It is currently ".$showing.").";
				echo form_checkbox('show_hide', '1', $checked);
			?>
		</p>
		<div class="clear"></div>
		
		
		<div id="meta_title">
		<p class="button">Edit Meta Data</p>
		</div>
		<div id="metastuff">
			<label>Page title:</label>
			<input type="text" name="meta_title" value="<?php echo $row->meta_title; ?>"/>
			
			<label>Page keywords:</label>
			<input type="text" name="keywords" value="<?php echo $row->keywords; ?>"/>
			
			<label>Page description:</label>
			<textarea cols="70" rows="5" name="description" type="text"><?php echo $row->description; ?></textarea>			
		</div>
		
		<div class="left_col">
		<?php echo form_submit('submit', 'Submit'); ?>
		</div>

		


		
<?php endforeach ?>
</form>
<?php
if($row->menu_title != 'Shop'){

?>	<div id="newgall">
	<h4>All Galleries</h4>
	<div id="galleries">
		<div class="thead">
			
				<div class='name'>Name</div>
				<div>Edit</div>
				<div>Add to Page</div>
				<div>Remove from Page</div>
				<div>delete</div>
				<div>&nbsp;</div>
				
		</div>
		<div class="tbody">
		<?php include ('galleries.php');?>
		</div>
	<div class="clear"></div>
	</div>
	<div class="clear"></div>

	</div><!-- end newgall -->
		<div class="clear"></div>

	<div class="new">
	<h4>Create a New Gallery</h4>
	<p>To create a new gallery, simply type a name for it into the box below and press the button.</p>
	<form action="<?php echo base_url(); ?>index.php/site/create_gallery" method="post">
				<?php 
				$sub_query2 = $this->Li_pagemodel->get_all_new_gallery_ID(); 
				foreach($sub_query2 as $row){
				$res = (int)$row->gallery_ID;
				}
				if(!isset($res)){
					$val = 1;
				}else{
					$val = $res + 1;

				}
				?>
				
				<input name="gallery_name" type="text"/>
				<input name="gallery_ID" type="hidden" value="<?php echo $val ;?>"/>
				<input type="submit" value="Create New Gallery"/>
			</form>

	</div>
	

	
	
	<div id="edit_existing">
			<div class="left_col">
			
		<form action="Gallery_controller/add_image" id="add_image">
		<h3>Add an image to this gallery</h3>
		<?php $galID = "";?>
			<input type="hidden" name="gallery_ID" class="gallery_ID" value="<?php echo $galID ;?>"/>
			
			<p>Image:</p>
			<input id="image" name="image" type="text"/>
			<a href="#" class="" id="g_switch" class="button" title="">Browse</a>
			<label>Title</label>
				<input type="text" name="image_title" value=""/>
				
				<label>Caption</label>
				<input type="text" name="image_alt" value=""/>
				
					<input type="hidden" value="<?php echo $pageID;?>" name="parent_pageID"/>

			<p>Click the button to add it to your gallery</p>
			<input type="submit" value="add to gallery"/>

				<?php
			$sub_query2 = $this->Li_pagemodel->get_this_gallery_info($row->gallery_ID); 
				foreach($sub_query2 as $row):
				?>

		
					<input type="hidden" name="gallery_ID" class="gallery_ID" value="<?php echo $row->gallery_ID;?>"/>
					<input type="hidden" name="page_ID" value="<?php echo $pageID;?>"/>
					<input type="hidden" name="gallery_name" value="<?php echo $row->gallery_name;?>"/>
				


		</form>
		



		</div>	
		<div class="right_col">
		<form id="update_name" action="Gallery_controller/update_name" method="post">
		<h3>Update This Gallery's name</h3>
		<p>Just pop a new one in the box and hit the button.</p>
		<input type="hidden" value="<?php echo $row->image_ID;?>" name='image_ID'/>
		<input type="hidden" name="page_ID" value="<?php echo $pageID;?>"/>
		<input type="text" value="<?php echo $row->gallery_name;?>" name="gallery_name"/>
		<input type="submit" value="Update name"/>

		</form>
			
		</div>
		<?php endforeach ?>	
		<div class="current_gallery">

		</div>
		<div class="clear"></div>
	</div>
	


</div>	
<?php
}
?>
<div class="clear"></div>
<div id="metastuff">


</div>
