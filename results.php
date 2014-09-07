<?php

// start session
//username assigning
$volume=$_POST['volume'];
//echo $volume;

$isotonicity=$_POST['isotonicity'];
//echo $isotonicity;
$NumberofIons = round (($volume * $isotonicity * 6.023)/10000);
echo $NumberofIons; 
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Isotonicity Calculator for Molecular Dynamics Simulations</title>
<meta name="generator" content="WYSIWYG Web Builder 9 - http://www.wysiwygwebbuilder.com">
<style type="text/css">
html, body
{
   height: 100%;
}
div#space
{
   width: 1px;
   height: 50%;
   margin-bottom: -384px;
   float:left
}
div#container
{
   width: 994px;
   height: 768px;
   margin: 0 auto;
   position: relative;
   clear: left;
}
body
{
   margin: 0;
   padding: 0;
   background-color: #FFFFFF;
   color: #000000;
}
</style>
<style type="text/css">
a
{
   color: #0000FF;
   text-decoration: underline;
}
a:visited
{
   color: #800080;
}
a:active
{
   color: #FF0000;
}
a:hover
{
   color: #0000FF;
   text-decoration: underline;
}
h1
{
   font-family: Arial;
   font-size: 32px;
   font-weight: bold;
   font-style: normal;
   text-decoration: none;
   color: #000000;
   background-color: transparent;
   margin: 0px 0px 0px 0px;
   padding: 0px 0px 0px 0px;
   display: inline;
}
h2
{
   font-family: Arial;
   font-size: 27px;
   font-weight: bold;
   font-style: normal;
   text-decoration: none;
   color: #000000;
   background-color: transparent;
   margin: 0px 0px 0px 0px;
   padding: 0px 0px 0px 0px;
   display: inline;
}
</style>
<style type="text/css">
#wb_Text1 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
   text-align: center;
}
#wb_Text1 div
{
   text-align: center;
}
#Table1
{
   border: 1px #FFFFFF dotted;
   background-color: #FF69B4;
   border-spacing: 0px;
}
#Table1 td
{
   padding: 0px 0px 0px 0px;
}
#Table1 td div
{
   white-space: nowrap;
}
#wb_Text2 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
   text-align: left;
}
#wb_Text2 div
{
   text-align: left;
}
#Table2
{
   border: 1px #FFFFFF solid;
   background-color: #00CED1;
   border-spacing: 0px;
}
#Table2 td
{
   padding: 0px 0px 0px 0px;
}
#Table2 td div
{
   white-space: nowrap;
}
#Table3
{
   border: 2px #228B22 solid;
   background-color: transparent;
   border-spacing: 0px;
}
#Table3 td
{
   padding: 0px 0px 0px 0px;
}
#Table3 td div
{
   white-space: nowrap;
}
#wb_Text3 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
   text-align: left;
}
#wb_Text3 div
{
   text-align: left;
}
</style>
</head>
<body>
<div id="space"><br></div>
<div id="container">
<div id="wb_Shape1" style="position:absolute;left:226px;top:187px;width:580px;height:421px;z-index:0;">
<img src="images/img0001.png" id="Shape1" alt="" style="border-width:0;width:580px;height:421px;"></div>
<div id="wb_Text1" style="position:absolute;left:1px;top:16px;width:992px;height:111px;text-align:center;z-index:1;">
<h1>Isotonicity Calculator<br>for <br>Molecular Dynamics Simulations</h1></div>
<table style="position:absolute;left:251px;top:332px;width:250px;height:128px;z-index:2;" cellpadding="0" cellspacing="0" id="Table1">
<tr>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:center;vertical-align:top;height:76px;"><div><span style="color:#000000;font-family:Arial;font-size:64px;"> Na<sup>+</sup></span></div>
</td>
</tr>
<tr>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:center;vertical-align:top;height:46px;"><div><span style="color:#000000;font-family:Arial;font-size:13px;"> </span><span style="color:#000000;font-family:Arial;font-size:35px;"><?php echo $NumberofIons ?></span></div>
</td>
</tr>
</table>
<div id="wb_Text2" style="position:absolute;left:256px;top:204px;width:124px;height:32px;z-index:3;text-align:left;">
<h2>Results:</h2></div>
<table style="position:absolute;left:500px;top:456px;width:246px;height:130px;z-index:4;" cellpadding="0" cellspacing="0" id="Table2">
<tr>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:center;vertical-align:top;height:74px;"><div><span style="color:#000000;font-family:Arial;font-size:13px;">&nbsp; </span><span style="color:#000000;font-family:Arial;font-size:64px;">Cl<sup>-</sup></span></div>
</td>
</tr>
<tr>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:center;vertical-align:top;height:50px;"><div><span style="color:#000000;font-family:Arial;font-size:13px;">&nbsp;&nbsp; </span><span style="color:#000000;font-family:Arial;font-size:35px;"><?php echo $NumberofIons ?></span></div>
</td>
</tr>
</table>
<table style="position:absolute;left:251px;top:267px;width:492px;height:56px;z-index:5;" cellpadding="0" cellspacing="0" id="Table3">
<tr>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;width:242px;height:24px;"><div><span style="color:#000000;font-family:Arial;font-size:19px;"><strong>Volume (Å<sup>3</sup>)</strong></span></div>
</td>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;height:24px;"><div><span style="color:#000000;font-family:Arial;font-size:19px;"> <?php echo $volume ?> </span></div>
</td>
</tr>
<tr>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;width:242px;height:24px;"><div><span style="color:#000000;font-family:Arial;font-size:19px;"><strong>Isotonicity (nM)</strong></span></div>
</td>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;height:24px;"><div><span style="color:#000000;font-family:Arial;font-size:19px;"> <?php echo $isotonicity ?> </php></span></div>
</td>
</tr>
</table>
<div id="wb_Text3" style="position:absolute;left:255px;top:235px;width:189px;height:23px;z-index:6;text-align:left;">
<span style="color:#000000;font-family:Arial;font-size:19px;"><strong><em>Given Parameters</em></strong></span></div>
</div>
</body>
</html>