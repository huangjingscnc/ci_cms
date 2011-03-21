
			<div class="left">
			

		
				<ul id="nav">
				
			<?php foreach($query as $row):?>
		
			<li><?php 
				if($row->has_sub_menu != 'TRUE'){
					echo anchor("page_controller/index/$row->pretty_name", $row->pretty_name); 
				}
				else
				{
					echo "<a href='$row->pretty_name' >$row->pretty_name</a>"; 
					$li = $row->pretty_name;
					
					$sub_query = $this->Pagemodel->get_all_subpages($li);
					echo "<ul>";
					foreach($sub_query as $row2):
					echo "<li>";?>
					<?php echo anchor("page_controller/index/$row2->pretty_name", $row2->pretty_name); ?>
					<?php echo "</li>";
					endforeach;
					echo "</ul>";
	
				}
									
			
			 ?>
			</li>
			<?php endforeach ;?>

				</ul>
			</div>
			
			<div class="main">