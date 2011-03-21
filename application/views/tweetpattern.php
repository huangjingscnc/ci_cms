<?php

foreach ($tweets as $row):
/*
echo "<pre>";
print_r($row);
echo "</pre>";
*/
/*
echo "<p>".$row->created_at."</p>";
print "<p>".strtotime($row->created_at)."</p>";
print "<p>".time()."</p>";
*/

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