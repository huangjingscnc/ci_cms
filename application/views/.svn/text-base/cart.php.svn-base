<script type="text/javascript">

/*
$(document).ready(function() {
$("#subct").submit(function(){
var mydata = $(this).serialize();
alert(mydata);
return false;
});
}); 
*/
</script>
<?php echo form_open('page/update_order', 'id="subct"'); ?>

<table cellpadding="3" cellspacing="0" width="475" border="0" id="basket" bgcolor="#666666">

<tr>
  <th class="qty" >QTY</th>
  <th class="desc" >Item Description</th>
  <th class="price" >Item Price</th>
  <th class="subtot" >Sub-Total</th>
</tr>

<?php $i = 1; ?>

<?php foreach($this->cart->contents() as $items): ?>

	<?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
	
	<tr>
	  <td width=""><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '2')); ?></td>
	  <td width="330">
		<?php echo $items['name']; ?>
			<?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>
					
				<p>
					<?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>
						
						<strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />
										
					<?php endforeach; ?>
				</p>
				
			<?php endif; ?>
				
	  </td>
	  <td width=""><?php echo $this->cart->format_number($items['price']); ?></td>
	  <td width="">&pound;<?php echo $this->cart->format_number($items['subtotal']); ?></td>
	</tr>

<?php $i++; ?>

<?php endforeach; ?>

<tr>
  <td colspan="2"></td>
  <td colspan="1" ><strong>Total</strong></td>
  <td colspan="1" >&pound;<?php echo $this->cart->format_number($this->cart->total()); ?></td>
</tr>

</table>

<p><?php echo form_submit('', 'Update your Cart'); ?></p>
</form>	