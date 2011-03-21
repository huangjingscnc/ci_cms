						<div class="push"></div>

</div><!-- end main wrapper -->

<div class="footer">
	<div class="container">

		<?php 
		if(isset($query2)){
		foreach($query2 as $row):?>
		<p>Pretty name: <?php echo $row->pretty_name;?>
		User Page: <?php echo $row->user_page;?>
		Access level: <?php echo $row->accesslevel;?></p>
		
		<?php endforeach ?>
		<?php } ?>
			
	</div>

</div>


</body>
</html>