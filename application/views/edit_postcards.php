<div class="center_column">
	<h1>Edit Postcards</h1>
	
	<div class='tabs'>
		<ul class="tabNavigation">
					<?php foreach($postcards as $row):
					//print_r($row);
					echo "<li><a href='#tab$row->postcard_ID'>Postcard $row->postcard_ID</a>";
					endforeach;
					?>
				</ul>
				
				<?php foreach($postcards as $row):
				echo "<div class='tab_content' id='#tab$row->postcard_ID'>";?>
				<?php 	echo form_open(base_url().'site/edit_postcards');
						echo form_hidden('postcard_ID',$row->postcard_ID);
						echo "<img src='".base_url()."$row->postcard_image' alt='postcard' class='postcard_image'/>";
						echo form_label('Image');
						echo form_input('postcard_image', "$row->postcard_image", "id='postcard_image".$row->postcard_ID."'");
						$textarea_opts = array(
					              'name'        => 'postcard_message',
					              'id'          => 'username',
					              'value'       => $row->postcard_message,
					              'rows'        => '5',
					              'cols'       => '66',
					            );
						echo form_textarea($textarea_opts);
						echo "<p>";
						echo form_submit('update','Update Postcard');
						echo "</p>";
						?>
						<script type="text/javascript">
							$(document).ready(function() { 
								$("#postcard_image<?php echo $row->postcard_ID; ?>").live('click',function(){
								tinyBrowserPopUp('postcard_image','postcard_image<?php echo $row->postcard_ID; ?>');
								return false;
								}); 						
							
							}); 
						</script>
						</form>
				</div>
				<?php endforeach;?>
				
				
	</div>
</div>