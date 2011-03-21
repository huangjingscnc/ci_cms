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




$("#tweetbox").load("<?php echo base_url();?>site/get_all_tweets");
   var refreshId = setInterval(function() {
	  $("#tweetbox").load('<?php echo base_url();?>site/get_all_tweets');
   }, 60000);


}); 
</script>
<?php
	echo form_open("site/new_tweet");
	$par = array(
              'name'        => 'tweet',
              'id'          => 'tweet',
              'cols'        => '90',
              'rows'		=> '2',
              'maxlength'	=> '140'
            );
		echo form_textarea($par);
		echo form_submit("submit","Tweet!");
	echo form_close();
?>
<div id="crem">144</div>
<h4>Most recent Tweets</h4>

<div id="tweetbox">
<?php

foreach ($tweets as $row):

$t_time = strtotime($row->created_at);
$now = time();
$diff = $now-$t_time;
$mins = (int) ($diff/60);//minutes ago;


switch($mins){

	case ($mins <= 2):
	$created = "seconds ago";
	break;

	case ($mins <= 2):
	$created = "1 minute ago";
	break;
	
	case ($mins <= 3):
	$created = "2 minutes ago";
	break;
	
	case ($mins <= 4):
	$created = "3 minutes ago";
	break;
	
	case ($mins <= 5):
	$created = "4 minutes ago";
	break;

	case ($mins <= 6):
	$created = "5 minutes ago";
	break;
	
	case ($mins <= 10):
	$created = "under 10 minutes ago";
	break;
	
	case ($mins <= 30):
	$created = "under half an hour ago";
	break;
	
	case ($mins <= 60):
	$created = "under an hour ago";
	break;
	
	default:
	$created = "seconds ago";

}



			echo "<div class='tweet'>";

			echo "<img alt='avatar' title='avatar' src='".$row->user->profile_image_url."' class=''/>";

			echo "<h4>".$row->user->name."</h4>";
			echo "<div class='Tdetails'><a href='' class='screen_name' title=''>@".$row->user->screen_name."</a>  |  ". $created."</div>";
			echo "<p>$row->text</p><div class='clear'></div></div>";

	endforeach;
?>
<script type="text/javascript">
$(document).ready(function() { 
$('.tweet p').each( function () {
 elem = $(this);
 elem.html(
   elem.text()
    .replace(/(http?:\/\/?\S+)/g, "<a href='$1' target='_blank'>$1</a>")
 ); 
});
});



</script>  
    
</div><!-- end tweetbox -->    
</div>    
