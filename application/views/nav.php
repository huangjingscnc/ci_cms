<div id="CMS_menu">
<ul id="nav">
	<li class="dontslide"><a href="#">Pages</a>
		<ul class = "pages_list">	
		<?php foreach($query as $row):?>
				
					<?php 
						if($row->has_sub_menu == 'neutral'){
							echo "<li menorder='$row->men_order' id='num_$row->ID'>";
							echo anchor("".base_url()."site/members_area/$row->pretty_name", $row->menu_title);
							echo "<img src='".base_url()."graphics/arrow.png' alt='move' width='16' height='16' class='handle' /></li>"; 
						}
						if($row->has_sub_menu == 'parent')
						{
							echo "<li menorder='$row->men_order' id='num_$row->ID'>";
							echo "<a href='".base_url()."site/members_area/$row->pretty_name' >
								<img src='".base_url()."LI_graphics/icon_dropdown.jpg' width='7' height='9'/>$row->menu_title</a>"; 
							$li = $row->ID;
							$sub_query = $this->Li_pagemodel->get_all_subpages($li);
							echo "<ul>";
								foreach($sub_query as $row2):
								echo "<li menorder='$row->men_order'id='num_$row2->ID'>";?>
								<?php echo anchor("".base_url()."site/members_area/$row2->pretty_name", $row2->menu_title); ?>
								<?php echo "<img src='".base_url()."graphics/arrow.png' alt='move' width='16' height='16' class='handle' /></li>";
								endforeach;
							echo "</ul>";
							echo "</li>"; 
						}?>
					<?php endforeach ;?>
		</ul>	
	</li>


	<hr/>		
			
		<li class="dontslide"><a href="#">Site functions</a>
		<?php 

			if( $this->session->userdata('username') == 'andyP' ||$this->session->userdata('username') == 'AndyP'){
			echo "<li>";
			echo anchor("site/create_area", 'Add a page', 'class="cms_control"');
			echo "</li>";
			}
			?>
			<li><a href="<?php echo base_url() ?>site/twitter" id='contact_details'  title="">Twitter</a></li>
			<li><a href="<?php echo base_url() ?>site/contact_details" id='contact_details'  title="">Contact Details</a></li>
			<li><a href="<?php echo base_url() ?>site/members_area/view_orders" class="" id="view_orders" title="">Orders Manager</a></li>
			<li><a href="<?php echo base_url() ?>site/availability/<?php echo date('Y')?>/<?php echo date('m');?>" class="cal" id="" title="">Calendar Manager</a></li>
			</li>
			<li><a id='manageimages' href='<?php echo base_url() ?>site/members_area/image-admin' class='' id='' title=''>Image Manager</a></li>
			<li><a id='managefiles' href='<?php echo base_url() ?>site/members_area/file-admin' class='' id='' title=''>File Manager</a></li>
		</li>
	</ul>

</div>