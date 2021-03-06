<?php
	foreach($query as $row):
	?>

<form id="edit_product_form" action="new_product" method="post">
<h3>Edit Product</h3>
	<input type="hidden" name="product_ID" value="<?php echo $row->product_ID ;?>"/>
	<div id="product_image_frame">
		<img  src="<?php echo base_url().$row->product_image ;?>"/>
	</div>
	<div id="prod_form_right">
		<label>Product Image: </label>
		<input type="text" name="product_image" id="image" value="<?php echo $row->product_image ;?>"/>
		<a title="" class="" id="g_switch" href="#">Browse</a>
		<br/>
		<label>Product Name: </label>
		<input type="text" name="product_name" value="<?php echo $row->product_name ;?>"/>

		<label>Unit Price: </label>
		&pound;<input type="text" name="product_price" value="<?php echo $row->product_price ;?>"/>
		
		<label>Product Description: </label>
		<textarea class='editor' name="product_description" rows="10" cols='57'><?php echo $row->product_description ;?></textarea>
		
		<h4>Colours</h4>
		<p><input type="checkbox" <?php if($row->colours == 'TRUE'){echo "checked = 'checked'";} ?> value='TRUE' name='colours' id="showcolours"/>This product has colour options</p>
		<div id="colour_options">
		<p>Please select the colour options available for this product.</p>
				<div class="left">
				<label>Red</label>
				<input type="checkbox" <?php if($row->red == 'TRUE'){echo "checked = 'checked'";} ?> value="TRUE" name="red"/>
				
				<label>Orange</label>
				<input type="checkbox" <?php if($row->orange == 'TRUE'){echo "checked = 'checked'";} ?> value="TRUE" name="orange"/>
				
				<label>Yellow</label>
				<input type="checkbox" <?php if($row->yellow == 'TRUE'){echo "checked = 'checked'";} ?> value="TRUE" name="yellow"/>
				
				<label>dark pink</label>
				<input type="checkbox" <?php if($row->dark_pink == 'TRUE'){echo "checked = 'checked'";} ?> value="TRUE" name="dark_pink"/>				
				<label>light pink</label>
				<input type="checkbox" <?php if($row->light_pink == 'TRUE'){echo "checked = 'checked'";} ?> value="TRUE" name="light_pink"/>				
				<label>navy blue</label>
				<input type="checkbox" <?php if($row->navy_blue == 'TRUE'){echo "checked = 'checked'";} ?> value="TRUE" name="navy_blue"/>				
				<label>light blue</label>
				<input type="checkbox" <?php if($row->light_blue == 'TRUE'){echo "checked = 'checked'";} ?> value="TRUE" name="light_blue"/>
			</div>
			<div class="right">
				<label>Green</label>
				<input type="checkbox" <?php if($row->green == 'TRUE'){echo "checked = 'checked'";} ?> value="TRUE" name="green"/>
				
				<label>Blue</label>
				<input type="checkbox" <?php if($row->blue == 'TRUE'){echo "checked = 'checked'";} ?> value="TRUE" name="blue"/>
				
				<label>Purple</label>
				<input type="checkbox" <?php if($row->purple == 'TRUE'){echo "checked = 'checked'";} ?> value="TRUE" name="purple"/>				
				<label>olive</label>
				<input type="checkbox" <?php if($row->olive == 'TRUE'){echo "checked = 'checked'";} ?> value="TRUE" name="olive"/>				
				<label>grey</label>
				<input type="checkbox" <?php if($row->grey == 'TRUE'){echo "checked = 'checked'";} ?> value="TRUE" name="grey"/>
								
				<label>black</label>
				<input type="checkbox" <?php if($row->black == 'TRUE'){echo "checked = 'checked'";} ?> value="TRUE" name="black"/>
							
				<label>white</label>
				<input type="checkbox" <?php if($row->white == 'TRUE'){echo "checked = 'checked'";} ?> value="TRUE" name="white"/>
			</div>
			<div class="clear"></div>
		</div>		


<h4>Sizes</h4>
		<p><input type="checkbox" <?php if($row->sizes == 'TRUE'){echo "checked = 'checked'";} ?> value='TRUE' name='sizes' id="sizes"/>This product has size options</p>
		<div id="size_options">
				<p>Please select the size options available for this product.</p>

				<div class="left">
				<label>X-small</label>
				<input type="checkbox" <?php if($row->xsmall == 'TRUE'){echo "checked = 'checked'";} ?> value="TRUE" name="xsmall"/>
				
				<label>small</label>
				<input type="checkbox" <?php if($row->small == 'TRUE'){echo "checked = 'checked'";} ?> value="TRUE" name="small"/>
				
				<label>medium</label>
				<input type="checkbox" <?php if($row->medium == 'TRUE'){echo "checked = 'checked'";} ?> value="TRUE" name="medium"/>
			</div>
			<div class="right">
				<label>large</label>
				<input type="checkbox" <?php if($row->large == 'TRUE'){echo "checked = 'checked'";} ?> value="TRUE" name="large"/>
				
				<label>X-large</label>
				<input type="checkbox" <?php if($row->xlarge == 'TRUE'){echo "checked = 'checked'";} ?> value="TRUE" name="xlarge"/>
				
				<label>XX-large</label>
				<input type="checkbox" <?php if($row->xxlarge == 'TRUE'){echo "checked = 'checked'";} ?> value="TRUE" name="xxlarge"/>
			</div>
						<div class="clear"></div>

		</div>		


	</div>

	<input type="submit" value="Update Product"/>
</form>


<?php	endforeach;

?>