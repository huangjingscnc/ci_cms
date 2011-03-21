<script type="text/javascript">
$(document).ready(function() { 
$("div.content").each(function(){
	    var $this = $(this);
		var str = $('th.heading').text();
		var cal = str.split('2');
		var month = $.trim(cal[0]);
		var year = "2"+cal[1];
		var day = $(this).siblings('.day_num').text();
		switch(month)
{
case "January":
  var monthno = '01';
  break;
case "February":
  var monthno = '02';
  break;
case "March":
  var monthno = '03';
  break;
case "April":
  var monthno = '04';
  break;
case "May":
  var monthno = '05';
  break;
case "June":
  var monthno = '06';
  break;
case "July":
  var monthno = '07';
  break;
case "August":
  var monthno = '08';
  break;
case "September":
  var monthno = '09';
  break;
case "October":
  var monthno = '10';
  break;
case "November":
  var monthno = '11';
  break;
case "December":
  var monthno = '12';
  break;
default:
alert("This is not a valid month. Please contact the website owner with details of this site error.\n MONTH: "+month);
}	
		$.post('<?php echo base_url(); ?>page/get_calendar_class',{'year':year, 'month': monthno, 'day': day},function(theclass){
		$this.addClass(theclass);
		});
	});

}); 
</script>

	
	<div class="center_column">
<?php foreach($query2 as $row):
			$this_pageID = $row->ID;
			?>
			
			<h1><?php echo $row->title;?></h1>
			<div class="content"><?php echo $row->content;?></div>
			<?php endforeach ?>
	<?php echo $calendar; ?>
</div>