<?php
header("Content-type: text/css");
$black = "#000";
$white = "#fff";

 $grey_1 = "#111111";
 $grey_2 = "#222222";
 $grey_3 = "#333333";
 $grey_4 = "#444444";
 $grey_5 = "#555555";
 $grey_6 = "#666666";
 $grey_7 = "#777777";
 $grey_8 = "#888888";
 $grey_9 = "#999999";
 $grey_10 = "#AAAAAA";
 $grey_11 = "#BBBBBB";
 $grey_12 = "#CCCCCC";
 $grey_13 = "#DDDDDD";
 $grey_14 = "#EEEEEE";
 $grey_15 = "#FFFFFF";
 
 $color_1 = "#111111";
$color_2 = "#222222";
$color_5 = "#333333";
$color_4 = "#444444";
$color_5 = "#555555";
$color_6 = "#666666";
?>

/* Eric Meyer's Reset Reloaded */

/* http://meyerweb.com/eric/thoughts/2007/05/01/reset-reloaded/ */
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,font,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,caption {
	margin:0;
	padding:0;
	border:0;
	outline:0;
	font-size:100%;
	vertical-align:baseline;
	background:transparent;
}

body {
	line-height:1;

}

ol,ul {
	list-style:none;
}

blockquote,q {
	quotes:none;
}


	
/* remember to define focus styles! */
:focus {
	outline:0;
}


	
/* remember to highlight inserts somehow! */
ins {
	text-decoration:none;
}

del {
	text-decoration:line-through;
}


	
/* tables still need 'cellspacing="0"' in the markup */
/*
table {
	border-collapse:collapse;
	border-spacing:0;
}
*/

* {
	margin:0;
}

html,body {
	height:100%;
}

.wrapper {
	min-height:100%;
	height:auto!important;
	height:100%;
	margin:0 auto -357px;

	
/* the bottom margin is the negative value of the footer's height */
}

.footer,.push {
	height:357px;

	
/* .push must be the same height as .footer */
}
@font-face {
	font-family: 'VegurExtraLight';
	src: url('Vegur-EL_0500.eot');
	src: local('Vegur ExtraLight'), local('Vegur-ExtraLight'), url('Vegur-EL_0500.woff') format('woff'), url('Vegur-EL_0500.otf') format('opentype'), url('Vegur-EL_0500.svg#Vegur-ExtraLight') format('svg');
}

@font-face {
	font-family: 'VegurRegular';
	src: url('Vegur-R_0500.eot');
	src: local('Vegur Regular'), local('Vegur-Regular'), url('Vegur-R_0500.woff') format('woff'), url('Vegur-R_0500.otf') format('opentype'), url('Vegur-R_0500.svg#Vegur-Regular') format('svg');
}

@font-face {
	font-family: 'VegurBold';
	src: url('Vegur-B_0500.eot');
	src: local('Vegur Bold'), local('Vegur-Bold'), url('Vegur-B_0500.woff') format('woff'), url('Vegur-B_0500.otf') format('opentype'), url('Vegur-B_0500.svg#Vegur-Bold') format('svg');
}


body {
	text-align:center;
	background-image: url(../graphics/bg_body.jpg);
	font: 14px/16px 'VegurRegular', Arial, sans-serif;
	background-repeat: repeat-x;
}

h1{
font: 26px/24px 'VegurBold', Arial, sans-serif;

}
h2{
font: 24px/24px 'VegurBold', Arial, sans-serif;
}
h3{
font: 22px/24px 'VegurBold', Arial, sans-serif;
}
h4 {
	font-size:20px;
}

h5 {
	font-size:18px;
}

h6 {
	font-size:16px;
}

p {
	margin:10px 0 2px;
	font: 14px/16px Arial, Helvetica, Sans-serif;
}
h1, h2, h3, h4 {

	color: <?php echo $color_1; ?>;;

}
#main {
}

#galleries {
	display:block;
	text-align:left;
}

#footer {
/* background-image:url("../graphics/bg_footer_ox.jpg"); */
background-color: <?php echo $color_1; ?>;
background-position:center top;
background-repeat:no-repeat;}

.container {
margin:0 auto;
padding:15px 15px 0;
text-align:left;
width:930px;
}

#footer .container {
	position:relative;
	/* min-height:326px; */
}

#galleries .gallery {
	border:1px solid <?php echo $grey_11; ?>;
	width:140px;
	display:block;
	text-align:center;
	float:left;
	margin:10px 15px 10px 0;
background-color: <?php echo $grey_13; ?>;;
min-height:170px;
}
#galleries .gallery:nth-child(6) {
	margin-right:0;
}
#galleries img {
	background-color:<?php echo $grey_14; ?>;
	width:120px;
	height:120px;
	display:block;
	margin:0px;
}

#galleries h4 {
font-size: 16px;
font-weight: normal;
}

#galleries h4 a{
text-decoration: none;
color: <?php echo $color_3; ?>
}

.clear {
	clear:both;
}


#galleries h2 {
background-image:url("../graphics/bg_galldiv_kilv.jpg");
display:block;
height:32px;
position:absolute;
/* text-indent:-9999px; */
top:-47px;
color: <?php echo "$white"; ?>;
padding:15px 0 0 15px;
width:120px;


}
#galleries{
background-image: url(../graphics/bg_galldiv_kilv.jpg);
border-top:1px solid <?php echo $grey_15; ?>;;
}
#galleries .container{
padding: 0;
position: relative;
}
#main .left {
float:left;
margin:20px 15px 30px 0;
width:195px;
}

#main  .main {
float:left;
margin:20px 20px 50px 0;
width:695px;
}

#main  .right {
}



#main.home  .main, #main.shop  .main  {
float:left;
margin:20px 20px 50px 0;
width:475px;
}

#main.home  .right, #main.shop  .right {
float:right;
margin:20px 15px 0 0;
width:210px;
display:block;
}

ul#nav {
	background-color:<?php echo $grey_14; ?>;
	width:195px;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	margin-bottom: 20px;
}

#nav li {
width:195px;
}

#nav li a {
border-bottom:1px solid <?php echo $grey_12; ?>;;
border-top:1px solid <?php echo $white; ?>;;
display:block;
font-size:18px;
padding:15px 10px 11px;
text-decoration:none;
width:175px;
color: <?php echo $color_4; ?>;;
text-transform:capitalize;
}
#nav li:last-child a{
border-bottom:0px none;

}
#nav li:last-child a:hover{
-moz-border-radius: 0 0 10px 10px;
-webkit-border-radius: 0 0 10px 10px;
}
#nav li:first-child a{
border-top:0px none;

}
#nav li:first-child a:hover{
-moz-border-radius: 10px 10px 0 0;
-webkit-border-radius: 10px 10px 0 0;
}
#nav li a:hover {
	background-color: #e6e6e6;

}

#nav li a.current {
	background-color:<?php echo $color_5; ?>;;
}

#nav li ul li a {
border-bottom:1px solid #bababa;
border-top: 1px solid #dcdcdc;

}
#nav li ul li a:hover, #nav li ul li:first-child a:hover, #nav li ul li:last-child a:hover{
background-color: #c3c3c3;
-moz-border-radius: 0;
-webkit-border-radius: 0;
}
#nav li ul li a{
-moz-border-radius: 0
-webkit-border-radius: 0
}

#nav li ul {
background-color: #cbcbcb;
}

#image_holder{
height:436px;
margin-left:-2px;
overflow:hidden;
padding:0px;
position:relative;
width:934px;
}
#frame{
/* min-width: 930px; */
position:absolute;
left: 0;
display: none;
}
.shop .preview{
display:block;
margin:26px 0 3px;
}
.shop .button{

}
#slider1 {
    width: 934px; /* important to be same as image width */
    height: 456px; /* important to be same as image height */
    position: relative; /* important */
	overflow: hidden; /* important */
	float:left;
margin:0px 0 0 0px;
}

#slider1Content {
    width: 934px; /* important to be same as image width or wider */
    position: absolute;
	top: 0;
	margin-left: 0;
}
.slider1Image {
    float: left;
    position: relative;
	display: none;
	max-width: 934px;
}
#main .slider1Image span {
    position: absolute;
	font: 10px/15px Arial, Helvetica, sans-serif;
    padding: 10px 13px;
    background-color: #000;
    filter: alpha(opacity=70);
    -moz-opacity: 0.7;
	-khtml-opacity: 0.7;
    opacity: 0.7;
    color: <?php echo $grey_15; ?>;
    display: none;
    z-index: 1;
}
#main .slider1Image span.top{
top: 0;
right: 0;
left: 0;
padding-top:35px;

}
#main .slider1Image span.right{
top: 0;
right: 0;
bottom: 0;
padding-top: 60px;
margin: 0;
}
#main .slider1Image span.bottom{
bottom: 0;
right: 0;
left: 0;
padding-bottom: 60px;
}
#main .slider1Image span.left{
top: 0;
bottom: 0;
left: 0;
padding-top: 60px;

}
.slider1Image {
max-width: 935px;
}
#collection{
margin:36px 0 -64px 496px;
position:absolute;}
#credits{
clear:both;
float:right;
font-size:12px;
position:absolute;
right:29px;
top:320px;
}
/*
.button{
background-image: url(../graphics/blank_button.png);
background-repeat: no-repeat;
width: 155px;
text-align: center;
display: block;
}
*/
#login{
-moz-border-radius:10px 10px 0 0;
background-color:#ABABAB;
border-color:-moz-use-text-color;
border-style:solid solid none;
border-width:3px 3px 0;
color:#777777;
display:block;
float:left;
font:18px/24px 'VegurBold',Arial,sans-serif;
padding:4px 20px 3px;
position:absolute;
text-align:center;
text-decoration:none;
text-shadow:1px 1px 1px #FFFFFF;
top:323px;
}
.hasSub a{
background-image: url(../graphics/corner_helper.png);
background-repeat: no-repeat;
background-position: bottom right;
}
.hasSub ul li a{
background-image:none;
}
div.content img{
max-width: 200px;
height: auto;
}
.img_box{
	border-color: #eaeaea;
	border-width: 1px;
	border-style: solid;
	padding: 15px;
	background-color: <?php echo $grey_12; ?>;;

}
#logo{
float: left;
}
.img_crop{
	background-color:<?php echo $grey_13; ?>;;
border:1px solid <?php echo $grey_11; ?>;;
height:109px;
margin:15px;
width:109px;
overflow: hidden;
}
.gall_pic{
background-color:<?php echo $grey_14; ?>;;
border:1px solid <?php echo $grey_10; ?>;;
height:134px;
padding:15px;
width:120px;
float: left;
margin: 0 5px 15px 0;
}
.gall_pic_holder{
height:109px;
overflow:hidden;
width:120px;
}
.gall_pic_holder img{
width:120px;
}
.gall_pic p{
text-align: center;
font-weight: bold;
color: <?php echo $grey_10; ?>;
}
.right .button{
color:<?php echo $grey_7; ?>;;
font-family:arial;
font-weight:bold;
margin:5px 0 10px;
padding:5px 15px;
text-decoration:none;
text-shadow:1px 1px 0 <?php echo $grey_13; ?>;;
min-width:90px;
}
#basket{
margin: 20px 0;
}
#basket th{
background-color:<?php echo $grey_7; ?>;;
}
#main table#basket td{
padding: 3px;
}
#basket .qty{
}
#basket .desc{
}
#basket .price{
}
#basket .subtot{

}
#basket tr{
background-color:<?php echo $grey_13; ?>;
}
#basket tr.even{
background-color:<?php echo $grey_12; ?>;
}
#basket td{
border-right: 1px solid <?php echo $grey_11; ?>;
}
#basket td.last{
border-right: 0 none;
}
.product_image_frame{
float:left;
height:150px;
overflow:hidden;
width:135px;
}
#order_table{
width: 692px;
			}
#order_table .row{
height:25px;
}
#order_table .header{
background-color:<?php echo $grey_13; ?>;;
display:block;
font-weight:bold;
}
#order_table .col{
border:1px solid <?php echo $grey_14; ?>;;
float:left;
padding:5px 10px;
text-align:center;
width:70px;
}
#order_table .wide{
text-align:left;
width:210px;
}
#order_table .footer .col{
border:0 none;
font-weight:bold;
width:72px;
}
#order_table .footer .wide{
border:0 none;
font-weight:bold;
width:212px;
}
#order_table .qty{
}
.shop_product .info label{
display:inline-block;
width:55px;
}
#order_form label{
display:inline-block;
text-align:right;
width:130px;
}
span.error{
background-color:<?php echo $grey_15; ?>FAB;
background-image:url("../graphics/error.png");
background-position:5px center;
background-repeat:no-repeat;
border:1px solid red;
display:block;
margin:5px 0 15px 133px;
padding:5px 5px 5px 30px;
width:233PX;
}
.calendar {
font-family: Arial; font-size: 12px;
}
table.calendar {
margin:50px auto;
border-collapse: collapse;
}
.calendar .days td {
background-color:#F1F2F2;
border:1px solid #DCDCDC;
height:90px;
padding:4px;
vertical-align:top;
width:90px;
}
.calendar .days td:hover {
background-color: <?php echo $grey_14; ?>;
}
.calendar .highlight {
font-weight: bold; color: <?php echo $color_6; ?>;;
}
tr.head_row{
height: 25px
}
tr.head_row th{
text-align: center;
}
th.heading{
color:<?php echo $grey_8; ?>;;
font-size:22px;
font-weight:bold;
text-transform:uppercase;
}
tr.head_row th a{
-moz-border-radius:5px 5px 5px 5px;
-webkit-border-radius:5px 5px 5px 5px;
background-color: #f7f7f7;
border:1px solid;
color:#8E8E8E;
display:block;
font-weight:bold;
padding:5px 10px;
text-decoration:none;
text-shadow:1px 1px <?php echo $grey_15; ?>;;
width:40px;
}
tr.head_row th.next a{
float: right;
}
tr.head_row th.previous a{
float: left;
}
tr.head_row th a:hover{
background-color: #f8f8f8;
}
.calendar .content{
-moz-border-radius:12px 12px 12px 12px;
-webkit-border-radius:12px 12px 12px 12px;
background-color: #b3d2ea;
color:<?php echo $grey_15; ?>;;
font-size:12px;
padding:0 9px;
}
.calendar .full{
background-color: #ffa9a6;
}
.calendar .available{
background-color: #c6e6c1;
}
.calendar .partial{
background-color: #f5d8a8;
}
.calendar .days td.today{

background-color: #e5ecf6;

}
td.days{
font-weight:bold;
padding:15px 0 2px;
}
.day_num{
color:#565656;
}
#CMS_menu ul li{

}
.address{
float:right;
}
#main .address .left{
float:left;
margin:5px 15px 0 0;
}
#main .address .right{
float:right;
}
.address h5{
color:<?php echo color_2; ?>;
font-size:14px;
}
.address p{
color:<?php echo color_2; ?>;
font:14px/14px 'VegurRegular',arial,sans-serif;
margin:4px 0;
}
.address p span{
font-family: 'VegurBold';
}
.footer .ox_contact{
margin:150px 0 0 40px;
}
.footer .ox_contact p{
color:<?php echo color_2; ?>;
font:14px/14px 'VegurRegular',arial,sans-serif;
margin:5px 0;
}
#order_form input[type='text']{
width:265px;
}
#main .main .postcard_image img{
width: 685px;
}
#main .main .postcard_image{
margin-bottom: 15px;
}
#main .main .postcard_holder{
background-color:#EBEBEB;
border:1px solid #E6F9DC;
margin:15px 0 0;
padding:15px;
width:685px;
}

.send_postcard input[type=text]{
background-color:transparent;
border-color: #6F6F6F;
border-style:none none dashed;
border-width:0 0 1px;
font-size:110%;
margin:5px 0;
}
input.button, a.button{
border-radius: 5px;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
background-color:<?php echo $grey_13; ?>;;
border:1px solid <?php echo $grey_11; ?>;;
color:<?php echo $grey_8; ?>;;
font-size:14px;
font-weight:bold;
min-height:15px;
margin:15px auto 10px;
padding:7px 20px 6px;
text-decoration:none;
text-shadow:1px 1px <?php echo $grey_15; ?>;;
width:auto;
display:inline-block;
background-image: url(../graphics/button_fade.png);
background-repeat: repeat-x;
}
hr{
margin: 15px 0
}
.form[name='email'] label{
display:block;
float:left;
margin:10px 5px 0 0;
text-align:right;
width:128px;
}
.form[name='email'] input{
border:1px solid #848484;
padding:5px;
width:258px;
}
#empty_basket, #view_order, #checkout{
background-position:5px center;
background-repeat:no-repeat;
padding-left:30px;
}
#empty_basket{
background-image: url(../graphics/cart_delete.png);
}
#view_order{
background-image: url(../graphics/cart_edit.png);
}
#checkout{
background-image: url(../graphics/cart_go.png);
}
#login_form form{
-moz-border-radius:15px 15px 15px 15px;
background-color:#EEEEEE;
border:5px solid #AAAAAA;
margin:20px auto;
padding:15px 50px;
width:250px;
}