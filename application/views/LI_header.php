<!DOCTYPE html>
	<html>
		<head>
			<title>Content Management</title>
			<meta charset="UTF-8"/>
			<link href="<?php echo base_url(); ?>css/logged_in.css" media="screen" rel="stylesheet" type="text/css" />
			<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.4.1.min.js"></script>
			<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui-1.7.1.custom.min.js"></script>
			
		</head>
	<body>
	
	<div class="wrapper">
	
	<div class="header">
	<img src="<?php echo base_url();?>graphics/space-dog-logo(rocket).png" alt="space-dog-logo(rocket)" id="logo" width="100" height="103" />
	<div class='welcome_message'>
	<h3>Welcome back <?php echo "<span class='uname'>".$this->session->userdata('username')."<span>";?></h3>
	<?php 
/*
	echo "<pre>";
	echo "</pre>";
*/
	?>
	<p>You have <span id="topmessage">0</span> order<span id="plural">s</span> yet to be completed.</p>
		
	</div>
	<?php
	$logout_atts = array('class' => 'logout', 'title'=>'Click here to logout.');
	echo anchor('site/logout', 'logout', $logout_atts);?>		<ul id="menu">
	
	</ul>
	</div>
	<div id="main">

