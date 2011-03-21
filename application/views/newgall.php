		<h3>Galleries</h3>
	
		<div class="left_col">
		<?php $sub_query = $this->Li_pagemodel->get_all_galleries();?>
		
		<h4>All galleries</h4>
			<form action="site/choose_gall">
				<input type="hidden" name="parent_pageID" value="<?php echo $pageID;?>"/>
				<select id="choose_gall">

					<option value="">Choose gallery</option>
					<?php foreach($sub_query as $row):?>
					<option value="<?php echo $row->gallery_ID;?>"><?php echo $row->gallery_name;?></option>
					<?php endforeach;?>
				</select>
			</form>

		</div>
		
		<div class="right_col">
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
	<div class="clear"></div>
	
	
	<div class="left_col">
	<form id="galleries_on_this_page" >
		<ul>

			
			<div id="page_galleries">
			<div class="remove_col">Remove</div>
			<div class="name_col">Gallery</div>
					<?php
			$sub_query2 = $this->Li_pagemodel->get_all_page_galleries($pageID); 
				foreach($sub_query2 as $row):
				/*
echo "<pre>";
				print_r($row);
				echo "</pre>";
*/

				?>
				
			<li>
				<div class="rem_cell">
				<form action="<?php echo base_url(); ?>gallery_controller/remove_gallery" class="remove_gallery">
					<input class="delete" name="delete" value="true" type="checkbox"/>
					<input type="hidden" value="<?php echo $row->image_ID ; ?>" name="image_ID"/>
					<input type="hidden" value="<?php echo $pageID ?>" name="pageID"/>

				</form>
				</div>
				
				<div class="name_cell">
					<?php echo $row->gallery_name ;?>
				</div>
				
				<div class="sbutton">
					<input type="submit" name="submit" />
				</div>

			</li>
			<?php endforeach ?>
			<div class="clear"></div>
			</div>

		</ul>
	</div>
	<div class="right_col">
		
	</div>

<div class="clear"></div>