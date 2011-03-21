<div class="center_column">
<h2>Twitter</h2>
<script type="text/javascript">
$(document).ready(function() { 
var al = 140;

$("#tweet").keydown(function(){
var len = this.value.length;
if (len >= 150) {
                    this.value = this.value.substring(0, 150);
                }
	$("#crem").text(140-len);
});

}); 
</script>
<?php
	echo form_open("new_tweet");
	$par = array(
              'name'        => 'tweet',
              'id'          => 'tweet',
              'cols'        => '90',
              'rows'		=> '2',
              'maxlength'	=> '140'
            );
		echo form_textarea($par);
		echo form_submit("tweet","Tweet!");
	echo form_close();
?>
<div id="crem">144</div>
<h4>Most recent Tweets</h4>
<?php

foreach ($tweets as $row):

			echo "<div class='tweet'>";
			//print_r($row->user->profile_image_url);
			echo "<img alt='avatar' title='avatar' src='".$row->user->profile_image_url."' class=''/>";

			echo "<h4>".$row->user->name."</h4>";
			echo "<p>$row->text</p></div>";

	endforeach;
?>    
    
    
</div>    
