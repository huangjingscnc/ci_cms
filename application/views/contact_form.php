
			<?php foreach($query2 as $row):
				$this_pageID = $row->ID;
			?>
			
			<h1><?php echo $row->title;?></h1>
			<div class="content">
				<?php echo $row->content;?>
			</div>
			
			<?php endforeach ?>
			
			
			<div class="">
			<?php 
				$form_attributes = array('name' => 'email', 'class' => 'form');
					echo form_open('page/contact_us', $form_attributes);
					echo form_hidden('sent', 'TRUE');
					echo "<p>";
					echo form_label('name: ', 'name');
					echo form_input('name', set_value("name"));
					echo form_error('name');
					echo "</p>\n<p>";
					echo form_label('subject: ', 'subject');
					echo form_input('subject', set_value("subject"));
					echo form_error('subject');
					echo "</p>\n<p>";
					echo form_label('email: ', 'email');
					echo form_input('email', set_value("email"));
					echo form_error('email');
					echo "</p>\n<p>";
					echo form_label('message: ', 'message');
					$txtopts = array('name' => 'message', 'value' => "".set_value("message"), 'maxlength' => '100', 'size' => '50', 'cols' => '32');
					echo form_textarea($txtopts);
					echo form_error('message');
					echo "</p>\n<p>";
					echo form_submit('submit', 'submit', 'class="button"');
					echo "</p>";
			?>
				</form>			
			</div>