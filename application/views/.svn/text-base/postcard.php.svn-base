<html>
<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" bgcolor='#eae3ff' >

<STYLE>
 .headerTop { background-color:#66CC00; border-top:0px solid #000000; border-bottom:0px solid #FFCC66; text-align:right; }
 .adminText { font-size:10px; color:#FFFFCC; line-height:200%; font-family:verdana; text-decoration:none; }
 .headerBar { background-color:#FFFFFF; border-top:0px solid #FFFFFF; border-bottom:0px solid #333333; }
 .title { font-size:22px; font-weight:bold; color:#336600; font-family:arial; line-height:110%; }
 .subTitle { font-size:11px; font-weight:normal; color:#666666; font-style:italic; font-family:arial; }
 td { font-size:12px; color:#000000; line-height:150%; font-family:trebuchet ms; }
 .footerRow { background-color:#FFFFCC; border-top:10px solid #FFFFFF; }
 .footerText { font-size:10px; color:#333333; line-height:100%; font-family:verdana; }
 a { color:#FF0000; color:#FF6600; color:#FF6600; }
</STYLE>
<?php


?>

<table width="100%" cellpadding="10" cellspacing="0" class="backgroundTable" bgcolor='#eae3ff' >
<tr>
<td valign="top" align="center">

<table width="550" cellpadding="0" cellspacing="0" style="border: 1px solid #6653b1">
<tr>
<td style="background-color:#d5c9ff;border-top:0px solid #000000;border-bottom:0px solid #FFCC66;text-align:right;" align="center"><span style="font-size:10px;color:#FFFFCC;line-height:200%;font-family:verdana;text-decoration:none;">Email not displaying correctly? <a href="<?php echo base_url()."page/view_card/".$card_ID; ?>" style="font-size:10px;color:#FFFFCC;line-height:200%;font-family:verdana;text-decoration:none;">View it in your browser.</a></span></td>

</tr>
 
<tr>
<td style="background-color:#FFFFFF;border-top:0px solid #FFFFFF;border-bottom:0px solid #333333;"><center><a href=""><IMG id=editableImg1 SRC="<?php echo base_url()."graphics/postcard-Logo.jpg"?>" BORDER="0" title="Your Company"  alt="Your Company" align="center"></a></center></td>
</tr>

<tr>
<td style="background-color:#FFFFFF;border-top:0px solid #FFFFFF;border-bottom:0px solid #333333;"><center><a href="#"><img src="<?php echo base_url().$postcard_image;?>" width="550" height="300" border="0" alt="Lorem ipsum"></a></center></td>
</tr>
</table>

<table width="550" cellpadding="20" cellspacing="0" bgcolor="#FFFFFF">
<tr>
<td bgcolor="#FFFFFF" valign="top" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;">
<p>
<?php echo $postcard_message;?>
</p>
<p>from</p>
<p><?php echo $sender_name;?></p>


</td>
</tr>


<tr>
<td style="background-color:#513C88;border-top:10px solid #FFFFFF;" valign="top">
<span style="font-size:10px;color:#ffffff;line-height:100%;font-family:verdana;">
<br />
You have been sent this from <?php echo base_url()."send_a_postcard.<br />";
?>
Our mailing address is:<br />
<?php
foreach ($address as $row):
echo $row->building .", ";
echo $row->road .", ";
echo $row->area .", ";
echo $row->city .", ";
echo $row->postcode .". ";
endforeach;
?><br />
<br />
Our telephone:<br />
<?php
foreach ($address as $row):
echo $row->telephone .", ";

endforeach;?>

<br />
Copyright (C) 2007  All rights reserved.<br />
<br />
<!-- <a href="*|FORWARD|*">Forward</a> this email to a friend -->
  
</span>
</td>
</tr>


</table>


</td>
</tr>

</table>


</body>
</html>