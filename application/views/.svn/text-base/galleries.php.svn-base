<?php 
$sub_query = $this->Li_pagemodel->get_all_galleries($pageID);
$pageID = $pageID;
		foreach($sub_query as $row):

				$this_pageID_bkts = "[$pageID]";
				$current_parent_PageID = $row->parent_pageID	;
				$parent_pageID_rmv = str_replace($this_pageID_bkts, '',$current_parent_PageID);
				echo  "<div class='row'>
					<form action='". base_url()."gallery_controller/gallery_form_one'>
						<input type='hidden' name='this_pageID_bkts' value='$this_pageID_bkts' />
						<input type='hidden' name='parent_pageID_rmv' value='$parent_pageID_rmv' />
						<input type='hidden' name='gallery_ID' value='$row->gallery_ID'/>
						<input type='hidden' name='image_ID' value='$row->image_ID'/>
						<input type='hidden' name='gallery_name' value='$row->gallery_name'/>
						<input type='hidden' name='this_pageID' value='$pageID' />
						<input type='hidden' name='parent_pageID' value='$row->parent_pageID'/>
						<input type='hidden' name='kind' value='$row->kind'/>
							<div class='name'>$row->gallery_name</div>
							<div><input type='radio' name='action' value='edit' /></div>";
						$pagetocheck = "[" . $pageID . "]";
		
						if(strpos($row->parent_pageID, $pagetocheck) ===false) 
						{	
						echo "<div><input type='radio' name='action' value='add_to_page' /></div>
						<div>&#8226;</div>";
						}else
						{
						echo "<div>&#8226;</div>
						<div><input type='radio' name='action' value='remove_from_page' /></div>";
					
						}
						echo  "<div><input type='radio' name='action' value='delete' /></div>
								<div class='del_row'><input type='submit' value='submit' name='submit'/></div>
							<div class='clear'></div>

							</form>
							<div class='clear'></div>

				</div>";			

		endforeach; ?>
