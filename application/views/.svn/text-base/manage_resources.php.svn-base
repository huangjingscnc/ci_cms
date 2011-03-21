<div id = "center_column">
<h1>Manage Resources</h1>

<?php echo $error;?>

<?php echo form_open_multipart('site/do_upload');?>

<script type="text/javascript">
$(document).ready(function() { 
$("form a#g_switch").click(function(){
	tinyBrowserPopUp('image','image');
});

$("form #image").click(function(){
	tinyBrowserPopUp('image','image');
});

}); 
</script>
		<a href="#" class="" id="g_switch" title="">Browse</a>
		<input id="image" name="userfile" type="text"/>
		<input type="submit" value="submit"/>


</form>

<?php foreach($query as $row):?>

<div class="resource_box">
<form action="site/do_update">
<a href="<?php echo base_url()?>uploads/<?php echo $row->res_name;?>" class="" id="" title="">
	<img src="<?php echo base_url()?>uploads/images/<?php echo $row->res_name;?>" alt="<?php echo $row->res_meta;?>"/>
</a>
	<h3><?php echo $row->res_name ;?></h3>
	<br />
<?php //echo form_input('title', 'title'); ?>
<br />
<?php //echo form_input('meta', 'meta'); ?>
<br />
<label>delete: </label><input type="checkbox" name="delete"/>
<br />

<input type="submit" value="update" />
	
</form>
</div>

<?php endforeach ?>

</div>
<div class="clear"></div>