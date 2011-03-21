<?php foreach($query2 as $row):
			$this_pageID = $row->ID;
			?>
			
			<h1><?php echo $row->title;?></h1>
			<div class="content"><?php echo $row->content;?></div>
			<?php endforeach ?>
<?php foreach ($get_postcards as $row):?>
<div class='postcard_holder'>
	<form action='<?php echo base_url();?>send_a_postcard' class='send_postcard' method='POST'>
		<input type="hidden" name='postcard_ID' value='<?php echo $row->postcard_ID ;?>'/>
		<input type="hidden" name='postcard_message' value='<?php echo $row->postcard_message ;?>'/>
		<input type="hidden" name='postcard_image' value='<?php echo $row->postcard_image ;?>'/>
			<div class='postcard_image'>
				<img alt='postcard' title='postcard' src='<?php echo base_url().$row->postcard_image; ?>' width='450' class=''/>
			</div>
		<div class='postcard_message'>
			<label>To: </label>
			<input type='text' name='to'/><br/><br />
			<?php echo $row->postcard_message ;?>
		</div><br />
		<label>Your Name:</label>
		<input type='text' name='sender_name'/>
		<hr/>
		<?php
				$this->load->plugin('captcha');
				$vals = array(
							'img_path'	 => './captcha/',
							'img_url'	 => base_url().'/captcha/',
							'word_length'=> '5',
						);
				
				$cap = create_captcha($vals);
				
				$data = array(
							'captcha_id'	=> '',
							'captcha_time'	=> $cap['time'],
							'ip_address'	=> $this->input->ip_address(),
							'word'			=> $cap['word']
						);
				
				$query = $this->db->insert_string('captcha', $data);
				$this->db->query($query);
				
				echo '<p>Submit the word you see below:<p/>';
				echo $cap['image']."<br/>";
				echo '<input type="text" name="captcha" value="" class="captcha"/>';
	
		?>
		<br /><input type='submit' class="button" value='Send'/>
	</form>
</div>
<?php endforeach; ?>
<!--

$row->postcard_ID
$row->postcard_image

-->