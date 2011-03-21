<?php foreach($prods as $row):
/*
echo "<pre>";
print_r($row);
echo "</pre>";
*/

				echo  "
				<div class='row'>
					<form class='products_table' action='".base_url()."site/product_form' method='post'>
						<input type='hidden' name='product_ID' value='$row->product_ID'/>
						<input type='hidden' name='product_name' value='$row->product_name'/>
						<input type='hidden' name='product_price' value='$row->product_price'/>
							<div class='name'>$row->product_name</div>
							<div><input type='radio' name='action' value='edit' /></div>";
						
		
						if($row->show == 'TRUE') 
						{	
						echo "<div><input type='radio' name='action' value='disable' /></div>
						<div>&#8226;</div>";
						}else
						{
						echo "<div>&#8226;</div>
						<div><input type='radio' name='action' value='enable' /></div>";
					
						}
						echo  "<div><input type='radio' name='action' value='delete' /></div>
								<div class='del_row'><input type='submit' value='submit' name='submit'/></div>
							<div class='clear'></div>

							</form>
							<div class='clear'></div>

				</div>";			

		endforeach; ?>
