<script type="text/javascript">
$(document).ready(function() { 

	$("#new_product_form").hide();
	
	$("#create_new").click(function(e){
		
		$("#new_product_form").slideToggle();
				e.preventDefault();

	});
}); 
</script><h3><a href="#" class="button" id="create_new" title="">Create a new product</a></h3>

<form id="new_product_form" action="<?php echo base_url();?>site/insert_product" method="post">
	<div id="new_product_image_frame">
		<img  src=""/>
	</div>
	<div id="new_prod_form_right">
		<label>Product Image: </label>
		<input type="text" name="product_image" id="new_image" value=""/>
		<a title="" class="" id="new_g_switch" href="#">Browse</a><br/><br/>
		
		<label>Product Name: </label>
		<input type="text" name="product_name" value=""/><br/>
		
		<label>Unit Price: </label>
		&pound;<input type="text" name="product_price" value=""/><br/>
		
		<label>Product Description: </label>
		<textarea class='editor' name="product_description" rows="10" cols='57'></textarea><br/>
		
		<h4>Colours</h4>
		<p><input type="checkbox" value='TRUE' name='colours' id="new_showcolours"/>This product has colour options</p>
		<div id="new_colour_options">
		<p>Please select the colour options available for this product.</p>
				<div class="left">
				<label>Red</label>
				<input type="checkbox" value="TRUE" name="red"/><br/>
				
				<label>Orange</label>
				<input type="checkbox" value="TRUE" name="orange"/><br/>
				
				<label>Yellow</label>
				<input type="checkbox" value="TRUE" name="yellow"/><br/>
				
				<label>Light Blue</label>
				<input type="checkbox" value="TRUE" name="light_blue"/><br/>
				
				<label>Navy Blue</label>
				<input type="checkbox" value="TRUE" name="navy_blue"/><br/>				

				<label>Light Pink</label>
				<input type="checkbox" value="TRUE" name="light_pink"/><br/>

				<label>Dark Pink</label>
				<input type="checkbox" value="TRUE" name="dark_pink"/><br/>
			</div>
			<div class="right">
				<label>Green</label>
				<input type="checkbox" value="TRUE" name="green"/><br/>
				
				<label>Olive</label>
				<input type="checkbox" value="TRUE" name="olive"/><br/>
				
				<label>Blue</label>
				<input type="checkbox" value="TRUE" name="blue"/><br/>
				
				<label>Purple</label>
				<input type="checkbox" value="TRUE" name="purple"/><br/>
				
				<label>Grey</label>
				<input type="checkbox" value="TRUE" name="grey"/><br/>
				

				<label>Black</label>
				<input type="checkbox" value="TRUE" name="black"/><br/>
				

				<label>White</label>
				<input type="checkbox" value="TRUE" name="white"/><br/>
				
			</div>
						<div class="clear"></div>

		</div>		


<h4>Sizes</h4>
		<p><input type="checkbox" value='TRUE' name='sizes' id="new_sizes"/>This product has size options</p>
		<div id="new_size_options">
				<p>Please select the size options available for this product.</p>

				<div class="left">
				<label>X-small</label>
				<input type="checkbox" value="TRUE" name="xsmall"/><br/>
				
				<label>small</label>
				<input type="checkbox" value="TRUE" name="small"/><br/>
				
				<label>medium</label>
				<input type="checkbox" value="TRUE" name="medium"/><br/>
			</div>
			<div class="right">
				<label>large</label>
				<input type="checkbox" value="TRUE" name="large"/><br/>
				
				<label>X-large</label>
				<input type="checkbox" value="TRUE" name="xlarge"/><br/>
				
				<label>XX-large</label>
				<input type="checkbox" value="TRUE" name="xxlarge"/><br/>
			</div>
			<div class="clear"></div>

		</div>		


	</div>
			<div class="clear"></div>

	<input type="submit" value="Create Product"/>
</form>