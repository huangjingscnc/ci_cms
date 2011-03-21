<div class = "center_column">
		
		<?php echo form_open('site/create'); ?>
		
		
		
		<?php $up_options = array('TRUE'=> 'TRUE','FALSE' =>'FALSE'); ?>
		<?php $al_options = array('1'=> 'Super Admin', '2' =>'Admin', '3' =>'Editor'); ?>
		
		
		<?php echo form_hidden('id'); ?>
		<p>
		<?php echo form_label('Title: ');?>
		<?php echo form_input('title'); ?>
		</p>
		
		<p>
		<?php echo form_label('Menu title: ');?>
		<?php echo form_input('menu_title'); ?>
		</p>
		
		<p>
		<?php $ta_options = array('class'=> 'editor', 'cols' =>'70', 'rows'=>'15', 'name' => 'content'); ?>

		<?php echo form_label('Content: ');?>
		<?php echo form_textarea($ta_options); ?>
		</p>
		
		<!--
<p>
		<?php //echo form_label('User Page: ');?>		
		<?php //echo form_dropdown('user_page', $up_options); ?>
		</p>
-->
		
<!--
		<p>
		<?php //echo form_label('Access level: ');?>
		<?php //echo form_dropdown('accesslevel', $al_options); ?>
		</p>
-->
		
		
				
		
		
		<?php $page_type_options = array('neutral' => 'neutral', 'parent' => 'parent', 'child' => 'child'); ?>
		<p>
			<?php echo form_label('Page Type: ');?>
			<?php echo form_dropdown('page_type', $page_type_options); ?>
		</p>

		
		<p id="choose_page" class="right_col">
			<?php echo form_label('Parent: ');?>
			
			<select name="parent">
				
				<option value="">Select a Parent Page</option>
	
				<?php foreach($query as $sel):?>
				<option value="<?php echo $sel->pretty_name; ?>"><?php echo $sel->pretty_name; ?></option>
				<?php endforeach; ?>
			</select>
		</p>
		<div class="clear"></div>


	
		
<!--
		<p id="choose_page">
		<?php echo form_label('Parent: ');?>
		
		<select name="has_sub_menu">
			<?php foreach($query as $row):?>
			<option><?php echo $row->pretty_name; ?></option>
			<?php endforeach; ?>
		</select>
		</p>
-->

		
		<?php echo form_submit('submit', 'Submit'); ?>


		</form>

</div>	
<div class="clear"></div>
