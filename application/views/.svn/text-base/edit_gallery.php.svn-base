	<?php foreach($query as $row): 
	?>
	
			<div class="gallery_image">
				<div class="image_wrapper">
				<img 
				src="<?php echo base_url().$row->image_name;?>" 
				alt="<?php echo $row->image_alt;?>"
				title="<?php echo $row->image_title;?>"/>
			</div>
				<form action="<?php echo base_url(); ?>Gallery_controller/edit_gallery_image" class="edit_gallery_image">
				
				<label>Title:</label>
				<input type="text" name="image_title" value="<?php echo $row->image_title;?>"/>
				
				<label>Caption:</label>
				<input type="text" name="image_alt" value="<?php echo $row->image_alt;?>"/>
				
				<label>delete:</label>
				<input type="checkbox" name="delete" value="true"/>
					<input type="hidden" value="<?php echo $row->image_ID;?>" name="image_ID"/>
					<input type="hidden" value="<?php echo $row->gallery_ID;?>"name="gallery_ID"/>
					<input type="hidden" value="<?php echo $row->gallery_name;?>" name="gallery_name"/>
					<input type="submit" name="submit" value="submit">
				</form>
			</div>
			
		<?php endforeach; ?>