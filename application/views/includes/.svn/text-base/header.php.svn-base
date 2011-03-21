
			<div class="left">
			

		
				<ul id="nav">
				
			<?php foreach($query as $row):?>
		
			<?php 
			if($row->show_hide == '1'){
					if($row->has_sub_menu != 'parent' && $row->has_sub_menu !='child'){
					echo "<li menorder='$row->men_order; '>";
					echo anchor(base_url()."$row->pretty_name", $row->menu_title); 
					echo "</li>";
				}
				else if($row->has_sub_menu == 'parent')
				{
					echo "<li menorder='$row->men_order;'>";
					echo "<a href='".base_url()."$row->pretty_name' >$row->menu_title</a>"; 
					$li = $row->ID;
					
					$sub_query = $this->Pagemodel->get_all_subpages($li);
					echo "<ul>";
					foreach($sub_query as $row2):
					echo "<li menorder='$row2->men_order'>";?>
					<?php echo anchor(base_url()."$row2->pretty_name", $row2->menu_title); ?>
					<?php echo "</li>";
					endforeach;
					
					echo "</ul>";
					echo "</li>";
				}
									
			}
			 ?>
			<?php endforeach ;?>
													
				</ul>
			</div>
			<div class="main" id="">