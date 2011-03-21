<div class="center_column">
<h1>Your Orders</h1>


<?php

echo "<h2>";
	if($orders == null){
echo "You have no orders.";
}
echo "</h2>";


	foreach($orders as $row):
	
?>
<div class="order<?php if($row->processed == 'TRUE'){
		echo " processed";
		}else{
		echo " unprocessed";
		}?>">
		<div class="order_header">
		
		<?php
		$tidydate = date('d-m-Y ', strtotime($row->date));
		?>
				<div class="name"><?php echo $row->orderer_name;?></div>
				<div class="date"><?php echo $tidydate;?></div>
			
		</div>
				<div class="details">
					<div class="contact_details">
						<h3>Contact details</h3>
						<p class='orderer_name'><?php echo $row->orderer_name ;?></p>
						<p><?php echo $row->orderer_phone ;?></p>
						<p><?php echo $row->building ;?></p>
						<p><?php echo $row->street ;?></p>
						<p><?php echo $row->town ;?></p>
						<p><?php echo $row->city ;?></p>
						<p class='postcode'><?php echo $row->postcode ;?></p>
						
						
						<form action="<?php echo base_url();?>site/mark_order_complete" method="post">
						<input name="id" value="<?php echo $row->id ;?>" type="hidden"/>

						<?php if($row->processed == 'TRUE'){
						echo "<span class='status complete'>ORDER PROCESSED</span>\n
							<input name='processed' value='FALSE' type='hidden'/>
							<input type='submit' value='Mark as incomplete'/> 
";
						
						}else{
						echo "<span class='status incomplete'>ORDER INCOMPLETE</span>
								<input name='processed' value='TRUE' type='hidden'/>
								<input type='submit' value='Mark as Complete'/> ";
						}?>
						</form>

						
					</div>
					
					<div class="order_details">
						<h3>Order</h3>
						<?php
						$os = unserialize($row->order);	
						foreach($os as $item):
							$rw = explode(',', $item);
							echo "<p>$rw[1] x $rw[3] $rw[2] $rw[0].</p>";

						?>
						<hr/>
						<?php endforeach;
						echo "<h5 class='total'>TOTAL: $rw[4]</h5>";
						?>
						
						

					</div>
							<div class="clear"></div>

				</div>
		<div class="clear"></div>

</div>


<?php endforeach;?>

<div class="clear"></div>
</div>
<div class="clear"></div>