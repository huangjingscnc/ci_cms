
<div class = "center_column">
		
		<?php echo form_open('site/updater'); ?>


		<?php foreach($query2 as $row):?>
		<?php $pageID = $row->ID;?>
		<?php $up_options = array('TRUE'=> 'TRUE','FALSE' =>'FALSE'); ?>
		<?php $up_selected = $row->user_page ?>
		
		<?php $al_options = array('1'=> 'Super Admin', '2' =>'Admin', '3' =>'Editor'); ?>
		<?php $al_selected = $row->accesslevel ?>
		
		<?php echo form_hidden('ID', $row->ID); ?>
		<p class="left_col">
		<?php echo form_label('Title: ');?>
		<?php echo form_input('title', $row->title,, echo $dis); ?>
		</p>
		
		<p class="right_col">
		<?php echo form_label('Menu title: ');?>
		<?php echo form_input('pretty_name', $row->pretty_name); ?>
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
			
			<option value="">Select a Parent Page</option>

			<?php foreach($query as $row):?>
			<option value="<?php echo $row->pretty_name; ?>"><?php echo $row->pretty_name; ?></option>
			<?php endforeach; ?>
		</select>
		</p>
		
		
		<div class="left_col">
		<?php echo form_submit('submit', 'Submit'); ?>
		</div>

		


		
<?php endforeach ?>
</form>


	<div id="newgall">
		<?php include "newgall.php";?>
	</div><!-- end newgall -->
	

	
	
	<div id="edit_existing">
			<div class="left_col">
			
		<form action="Gallery_controller/add_image" id="add_image">
			<input type="hidden" name="gallery_ID" class="gallery_ID" value=""/>
			<a href="#" class="" id="g_switch" title="">Browse</a>
			
			<p>Image:</p>
			<input id="image" name="image" type="text"/>
			<label>Title</label>
				<input type="text" name="image_title" value=""/>
				
				<label>Caption</label>
				<input type="text" name="image_alt" value=""/>
				
					<input type="hidden" value="<?php echo $pageID;?>" name="parent_pageID"/>

			<p>Click the button to add it to your gallery</p>
			<input type="submit" value="add to gallery"/>
		</form>
	</div>
	
	
		
		<div class="right_col">
				<?php
			$sub_query2 = $this->Li_pagemodel->get_this_gallery_info($row->gallery_ID); 
				foreach($sub_query2 as $row):
/*
				echo "<pre>";
				print_r ($row);
				echo "</pre>";
*/

				?>
		<form action="<?php echo base_url(); ?>gallery_controller/delete_gallery" id="delete_gallery">
			
			<input type="hidden" name="gallery_ID" value="" class="gallery_ID"/>
			<input href="" class="button" value="Delete This gallery" type="submit"/>

		</form>

		
		<form action="<?php echo base_url(); ?>gallery_controller/add_gallery_to_page" id="add_gallery_to_page"><!-- get_gallery -->
		
					<input type="hidden" name="gallery_ID" class="gallery_ID" value="<?php echo $row->gallery_ID;?>"/>
					<input type="hidden" name="page_ID" value="<?php echo $pageID;?>"/>
					<input type="hidden" name="gallery_name" value="<?php echo $row->gallery_name;?>"/>
				
					<input class="button" value="Add to this page" type="submit"/>

		</form>
		
<?php endforeach ?>


		</div>	
			
		<div class="current_gallery">

		</div>
		<div class="clear"></div>
	</div>
	


</div>	
<div class="clear"></div>
