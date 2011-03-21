<style>
.shop_product{
border:1px solid #BBBBBB;
display:block;
margin:0 0 15px;
padding:15px;
}
.shop_product .product_name{

}
.shop_product .info{
float:left;
width:306px;
}
.shop_product .product_description{

}
.shop_product .product_price{

}
.shop_product img{
float:left;
margin:0 15px 0 0;
max-height:80px;
max-width:120px;
}

</style>



<?php foreach($query2 as $row):
			$this_pageID = $row->ID;
			?>
			
			<h1><?php echo $row->title;?></h1>
			<div class="content"><?php echo $row->content;?></div>
			<?php endforeach ?>
			
			
			
<?php foreach($shop as $row):?>

<div class='shop_product'>
	<div class="product_image_frame">
		<a href="<?php echo $row->product_image ;?>" class="product_image" id="" title="">
		<img src="<?php echo base_url().$row->product_image ;?>"/>
		</a>
	</div>
	<div class="info">
		<h3 class="product_name"><?php echo $row->product_name ;?></h3>
		<p class="product_description"><?php echo $row->product_description ;?></p>
		<p class="product_price">&pound;<?php echo $row->product_price ;?></p>
		
		<form method="post" action="<?php echo base_url()?>Shop/add_to_basket">
		<input type="hidden" name="product_name" value="<?php echo $row->product_name ;?>"/>
		<input type="hidden" name="product_ID" value="<?php echo $row->product_ID ;?>"/>
		<input type="hidden" name="product_price" value="<?php echo $row->product_price ;?>"/>
		
		
		<?php if($row->sizes == 'TRUE'){echo "<p><label>Size: </label><select  type='select' name='product_size'/>";}
			if($row->sizes == 'TRUE' && $row->xsmall == 'TRUE'){echo "<option value='xsmall'>xsmall</option>";}
			if($row->sizes == 'TRUE' && $row->small == 'TRUE'){echo "<option value='small'>small</option>";}
			if($row->sizes == 'TRUE' && $row->medium == 'TRUE'){echo "<option value='medium'>medium</option>";}
			if($row->sizes == 'TRUE' && $row->large == 'TRUE'){echo "<option value='large'>large</option>";}
			if($row->sizes == 'TRUE' && $row->xlarge == 'TRUE'){echo "<option value='xlarge'>xlarge</option>";}
			if($row->sizes == 'TRUE' && $row->xxlarge == 'TRUE'){echo "<option value='xxlarge'>xxlarge</option>";}
		 if($row->colours == 'TRUE'){echo "</select></p>";}
		 ?>
				
		<?php if($row->colours == 'TRUE'){echo "<p><label>Colour: </label><select  type='select' name='product_colour'/>";}
			if($row->colours == 'TRUE' && $row->red == 'TRUE'){echo "<option value='red'>red</option>";}
			if($row->colours == 'TRUE' && $row->orange == 'TRUE'){echo "<option value='orange'>orange</option>";}
			if($row->colours == 'TRUE' && $row->yellow == 'TRUE'){echo "<option value='yellow'>yellow</option>";}
			if($row->colours == 'TRUE' && $row->green == 'TRUE'){echo "<option value='green'>green</green>";}
			if($row->colours == 'TRUE' && $row->blue == 'TRUE'){echo "<option value='blue'>blue</option>";}
			if($row->colours == 'TRUE' && $row->purple == 'TRUE'){echo "<option value='purple'>purple</option>";}
			if($row->colours == 'TRUE' && $row->navy_blue == 'TRUE'){echo "<option value='navy_blue'>navy blue</option>";}
			if($row->colours == 'TRUE' && $row->light_blue  == 'TRUE'){echo "<option value='light_blue '>light blue </option>";}
			if($row->colours == 'TRUE' && $row->dark_pink == 'TRUE'){echo "<option value='dark_pink'>dark pink</option>";}
			if($row->colours == 'TRUE' && $row->light_pink == 'TRUE'){echo "<option value='light_pink'>light pink</option>";}
			if($row->colours == 'TRUE' && $row->olive == 'TRUE'){echo "<option value='olive'>olive</option>";}
			if($row->colours == 'TRUE' && $row->grey == 'TRUE'){echo "<option value='grey'>grey</option>";}
			if($row->colours == 'TRUE' && $row->black == 'TRUE'){echo "<option value='black'>black</option>";}
			if($row->colours == 'TRUE' && $row->white == 'TRUE'){echo "<option value='white'>white</option>";}
		 if($row->colours == 'TRUE'){echo "</select></p>";}
		 ?>
		 
		 
		 
		<br/>
		<label>Amount: </label>
		<input type="text" size="2" maxlength="2" value="1" name="qty" />
		
		<input type="submit" value="Add to order"/>		
		
		</form>
	</div>
	<div class="clear"></div>
</div>

<?php 
//print_r($row);
endforeach;
?>


