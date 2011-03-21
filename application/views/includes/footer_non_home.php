</div>
			
			
			<div class="clear"></div>
		</div><!-- end container -->
			<div class="push"></div>


	</div><!-- end Main -->
	
			<?php
			
			foreach($query2 as $row):
				$pageID = $row->ID;
				if($pageID == ''){
				$pageID = '7';
				}
		endforeach;



			
				$gi = 0;
				foreach($query3 as $sam):
				$this_pageID_bkts = "[$pageID]";
		
				$current_parent_PageID = $pageID;
				$parent_pageID_rmv = str_replace($this_pageID_bkts, '',$current_parent_PageID);
				$pagetocheck = "[" . $pageID . "]";
				if(strpos($sam->parent_pageID, $pagetocheck) ===false) 
				{
				
				}else{
				$gi++;
				}
				endforeach;
				if($gi > 0){
			
			?>
	<div id="galleries">
		<div class="container">
		<h2>Galleries</h2>
		<div class="shs">
		
		<?php		
			

		
		foreach($query3 as $sam):
//print_r($sam);
		$this_pageID_bkts = "[$pageID]";
		
				$current_parent_PageID = $pageID;
				$parent_pageID_rmv = str_replace($this_pageID_bkts, '',$current_parent_PageID);
				$pagetocheck = "[" . $pageID . "]";
				if(strpos($sam->parent_pageID, $pagetocheck) ===false) 
				{
				
				 }else{
			
			echo "
			<div class='gallery'>
				<div class='img_crop'>";
			//$query4 = $this->db->get_where('gallery_images', array('gallery_ID'=> $sam->gallery_ID,'kind'=> 'image'));
			//$pageID = $pageID;
			$gallerytograb = $sam->gallery_ID;
			
				$query = "SELECT * from  gallery_images WHERE kind = 'image' AND gallery_ID='$gallerytograb' LIMIT 1";
	$result = mysql_query($query) or die("Query failed");
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	extract($row);			
			
			echo "<img src='".base_url()."$image_name' class=''/>";
			
			}
			
			echo "		
				</div>
				
				<h4><a href='".base_url()."galleries/$sam->gallery_ID' class='' id='' title=''>$sam->gallery_name</a></h4>
			</div><!-- end gallery -->";
				 }
		//echo $pageID;
		endforeach;
		
		?>

			
			<div class="clear"></div>

			</div><!-- end shs -->
			<div class="clear"></div>
		</div>
	</div>
	<?php
	
				}else{
				//echo "no galleries available";
				}
?>
	<div id="footer" class="footer">
		<div class="container">
			<img id="collection" src="<?php echo base_url(); ?>graphics/collection(K)_54.png" alt="collection(K)_54" width="210" height="306" />
			<div class="ox_contact">
				<p>Oxfordshire County Council, County Hall, New Road, Oxford, OX1 1ND</p>
				<p></p>
				<p><strong>Main switchboard:</strong> 01865 792422 | <strong>Fax:</strong> 01865 726155</p>
				
				

			</div>
			<p id="credits">
				web design and development:<a href="http://space-dog.co.uk/index.html" class="" id="" title="Web designer">space-dog</a>
			</p>
		<?php echo anchor('login', 'Admin', 'id="login" class="lkjn"');?>

			<div class='clear'></div>
		</div>
	</div>
	</body>
</html>