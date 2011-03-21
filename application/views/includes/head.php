<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<?php foreach($query2 as $row):?>
		<head>
		
		<?php 
		$p_title = $row->meta_title;
		$m_title = $row->menu_title;
		?>

		<title><?php echo $p_title;?></title>
		
		<meta name="Keywords" content="<?php echo $row->keywords;?>" />
		<meta name="Description" content="<?php echo $row->description;?>" />
		<meta name="language" content="EN-GB">
		<meta name="author" content="Andy Price">
		<meta name="copyright" content="Andy Price 2010">
		<meta name="robots" content="INDEX, FOLLOW">
		<meta name="revisit-after" content="5 days">
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		
		<link href="<?php echo base_url(); ?>css/screen.php" media="screen" rel="stylesheet" type="text/css" />
		
		
		<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery/jquery-1.4.2.min.js"></script>
	<script type="text/javascript">
	if (typeof jQuery == 'undefined')
	{
	    document.write(unescape("%3Cscript src='<?php echo base_url(); ?>/js/jquery-1.4.1.min.js' type='text/javascript'%3E%3C/script%3E"));
	}
	</script>
		
		<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.4.1.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/accordian-0.1.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-lightbox/jquery.lightbox-0.5.pack.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/site.js"></script>

	</head>
	
		<body id="">

	<div id="main" class="wrapper <?php
	//echo $m_title;
if($row->ID == '1')
{echo "home";
}
if($row->ID == '7'|| $p_title == 'Shop'){
echo "shop";
}
?>">
		<div class="container">
		
		<img src="<?php echo base_url(); ?>graphics/logo.jpg" alt="logo" width="213" height="105" id="logo"/>
		
		<div class="address">
		<h5>Contact Us:</h5>
			<?php
				foreach($address as $addr):
				//print_r($addr);
				echo "<div class='left'>";
				echo "<p>$addr->building</p>";
				echo "<p>$addr->road</p>";
				echo "<p>$addr->area</p>";
				echo "<p>$addr->city</p>";
				echo "<p>$addr->postcode</p>";
				echo "</div><div class='left'>";
				echo "<p><span>Phone: </span>$addr->telephone</p>";
				if($addr->other_phone != ''){
					echo "<p><span>Or: </span>$addr->other_phone</p>";
				}

				echo "<p><span>Fax: </span>$addr->fax</p>";
				echo "<p><span>Email: </span>".safe_mailto($addr->email)."</p>";
				echo "</div>";

				endforeach;
			?>
			
		</div>
		<div class="clear"></div>
		<?php 
		if($row->ID == '1'){
		
		?>
		
		
		
		<script type="text/javascript" src="<?php echo base_url(); ?>js/s3Slider.js"></script>
		<script type="text/javascript">
		$(document).ready(function() { 
  $('#slider1').s3Slider({
			      timeOut: 5000
			   });
			   

			   
			   
		}); 
		</script>
			
   
		<div id="image_holder">
		
		<div id="slider1">
        <ul id="slider1Content">
        <?php $slider_query = $this->Pagemodel->get_sliders();

		foreach($slider_query as $row):
		?>

            <li class="slider1Image">
				<img src="<?php echo base_url(); ?><?php echo $row->image_name;?>" alt="Image <?php echo $row->slider_ID;?>" width='960' height='456'/>
                <span class="<?php echo $row->panel_position;?>">
                	<h4><?php echo $row->info_title;?></h4>
 	                	<div><?php echo $row->info_copy;?></div>
                	</span>
            </li>
           <?php endforeach; ?>           
            
                                 
            <div class="clear slider1Image"></div>
        </ul>
    </div>
    


		
		
			<img src="<?php echo base_url(); ?>graphics/fg_frame_ox.png" alt="fg_frame_ox" width="935" height="456" id="frame" style="z-index: 1;"/>
		</div>
		<?php }
		elseif($row->ID != ''){
		foreach ($query2 as $row):


		?>
		<div id="image_holder" style="">
					<img src="<?php echo base_url(); ?><?php echo $row->main_image;?>" style="" width='960'/>
<!-- 					<img src="<?php echo base_url(); ?>graphics/fg_frame_ox.png" alt="fg_frame_ox"  id="frame" style="z-index: 1;"/> -->


		</div>
		<?php endforeach;} ?>
		
		
		    <?php endforeach; ?>
		    <div class="clear"></div>