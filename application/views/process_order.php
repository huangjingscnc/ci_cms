	<h1>Your Order</h1>
	<p>Thank you for taking the time to choose items from our online shop.</p>
	
	<p>Unfortunately we are currently unable to process payment via the web however you can complete and print this page and post it with a cheque for <strong><span>&pound;<?php echo $this->cart->total();?></span></strong> or hit the send button below and post the cheque separately. This will send the order electronically so that we are able to process it and send it to you much quicker when your payment arrives. </p>
	<p>Please review your order below and amend it if necessary.</p>
	<?php include 'cart.php';
	?>
	
	<br/><br/>
	
	<?php 	$i = 1;
	foreach($this->cart->contents() as $items):
	$colour = $items['options']['colour'];
	$size = $items['options']['size'];

	$orderitemsarray = $items['name'] ."," . $items['qty'] ."," . $colour ."," . $size ."," . $this->cart->total() ."," . date("d/m/Y");
	$makeorderarray[] = $orderitemsarray;
 $i++; ?>

<?php endforeach; ?>

<?php
if(isset($orderitemsarray)){
$getarray = serialize($makeorderarray);
}
?>

	<h2>Please Send my order to:</h2>
	<form id="order_form" action="process_order" method="post" autocomplete='false'>
		
<input name="shoporder" type="hidden" value='<?php echo $getarray; ?>'/>
<input name="order_total" type="hidden" value='<?php echo $this->cart->total(); ?>'/>
		<p><label>Name: </label>
		<input type="text" name='orderer_name' value="<?php echo set_value('orderer_name'); ?>"/>
		<?php echo form_error('orderer_name'); ?></p>
		
		<p><label>Telephone Number: </label>
		<input type="text" name='orderer_phone' value="<?php echo set_value('orderer_phone'); ?>"/>
		<?php echo form_error('orderer_phone'); ?></p>

		<p><label>Building no / name: </label>
		<input type="text" name='building' value="<?php echo set_value('building'); ?>"/> 
		<?php echo form_error('building'); ?></p>

		
		<p><label>Street: </label>
		<input type="text" name='street' value="<?php echo set_value('street'); ?>"/> 
		<?php echo form_error('street'); ?></p>
		
		<p><label>Town: </label>
		<input type="text" name='town' value="<?php echo set_value('town'); ?>"/> 
		<?php echo form_error('town'); ?></p>
		
		<p><label>City: </label>
		<input type="text" name='city' value="<?php echo set_value('city'); ?>"/>
		<?php echo form_error('city'); ?></p>
		
		<p><label>Postcode: </label>
		<input type="text" name='postcode' value="<?php echo set_value('postcode'); ?>"/> 
		<?php echo form_error('postcode'); ?></p>
		
		<input type="submit" value="Process my Order!">
	</form>